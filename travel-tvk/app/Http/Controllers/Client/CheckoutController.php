<?php

namespace App\Http\Controllers\Client;

use App\BookTour;
use App\Http\Controllers\Controller;
use App\Tour;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class CheckoutController extends Controller
{
    protected $provider;

    public function __construct()
    {
        $this->provider = new ExpressCheckout;

    }

    public function showCheckout(Request $request)
    {
        $tour = Tour::findOrFail($request->input('tour-id'));
        return view('client.book-tour', compact('tour'));
    }

    public function getCart($tourId, $invoiceId)
    {

        $tour = Tour::findOrFail($tourId);
        $data = [];

        $data['items'][] = [
            'name' => $tour->name,
            'price' => (int)$tour->price,
            'desc'  => $tour->desc,
            'qty' => 1
        ];

//        $data['invoice_id'] = $tourId+rand(10,100000);
        $data['invoice_id'] = $invoiceId;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('success.payment', [$invoiceId]);
        $data['cancel_url'] = route('cancel.payment', [$invoiceId]);

        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }

        $data['total'] = $total;
        return $data;
    }

    public function showPayment(Request $request)
    {
        if($request->has('isUserOwnInfo')){
            $tourId = $request->input('tour-id');
            $tour = Tour::findOrFail($tourId);

            $invoiceId = $tourId+rand(10,100000);

            $tour->members()->attach($tourId,
                [
                    'isUserOwnInfo' => 0,
                    'status' => 'pending',
                    'is_paid' => 0,
                    'tmp_invoice' => $invoiceId,
                ]);
        }
        else{
            return 'blublu';
        }

        return view('client.payment', compact(['tour', 'invoiceId']));
    }

    public function executePaymentPaypal(Request $request)
    {
        $tourId = $request->input('tour-id');
        $invoiceId = $request->input('invoice-id');


        $cart = $this->getCart($tourId, $invoiceId);
        $response = $this->provider->setExpressCheckout($cart);
        return redirect($response['paypal_link']);
    }

    public function paymentSuccess(Request $request, $invoiceId)
    {
        $token = $request->get('token');
        $PayerID = $request->get('PayerID');
//        $invoiceId = $request->get('invoiceId');


        $bookTour = BookTour::where('tmp_invoice', $invoiceId)->first();
        $data = $this->getCart($bookTour->tour_id, $invoiceId);

        $response = $this->provider->getExpressCheckoutDetails($token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            // Perform transaction on PayPal
            $payment_status = $this->provider->doExpressCheckoutPayment($data, $token, $PayerID);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if (!strcasecmp($status, 'Completed') || !strcasecmp($status, 'Processed')) {
                $bookTour->status = 'Active';
                $bookTour->is_paid = 1;
                $bookTour->paypal_token = $token;
                $bookTour->paypal_payerid = $PayerID;
                $bookTour->paypal_invoiceid = $invoiceId;

            } else {
                $bookTour->is_paid = 0;
            }
            $bookTour->save();
            return view('client.payment-success');
        }
        else{
            return 'failed';

        }
    }

    public function cancelPayment()
    {

    }
}

