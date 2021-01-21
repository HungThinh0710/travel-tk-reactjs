<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function getTour(Request $request, $id)
    {
        $tour = Tour::findOrFail($id);
        return view('client.tour-detail', compact('tour'));
    }

    public function showCheckoutTour(Request $request)
    {
        $tour = Tour::findOrFail($request->input('id'));
        return view('client.book-tour', compact('tour'));
    }
}
