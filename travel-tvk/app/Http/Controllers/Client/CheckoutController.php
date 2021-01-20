<?php

namespace App\Http\Controllers\Client;

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
//        $this->provider = PayPal::setProvider('express_checkout');

    }

    public function showCheckout(Request $request)
    {
        $tour = Tour::findOrFail($request->input('tour-id'));
        return view('client.book-tour', compact('tour'));
    }

    public function checkout(Request $request)
    {

    }

    public function showPayment(Request $request)
    {
//        $dumpData = $request->only('fullname', '');
        return view('client.payment');
    }

    public function executePaymentPaypal(Request $request)
    {

        $data = [];
        $data['items'] = [
            [
                'name' => 'Product 1',
                'price' => 9.99,
                'desc'  => 'Description for product 1',
                'qty' => 1
            ],
            [
                'name' => 'Product 2',
                'price' => 4.99,
                'desc'  => 'Description for product 2',
                'qty' => 2
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = url('/payment/success');
        $data['cancel_url'] = url('/cart');

        $total = 0;
        foreach($data['items'] as $item) {
            $total += $item['price']*$item['qty'];
        }

        $data['total'] = $total;

        //give a discount of 10% of the order amount
        $data['shipping_discount'] = round((10 / 100) * $total, 2);

        $response = $this->provider->setExpressCheckout($data);
        // This will redirect user to PayPal
        return redirect($response['paypal_link']);
    }

    public function paymentSuccess()
    {

    }

    public function cancelPayment()
    {

    }
}

