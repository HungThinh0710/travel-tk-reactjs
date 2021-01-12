<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddTourFormRequest;
use App\Tour;

class TourController extends Controller
{
    public function addTour(AddTourFormRequest $request)
    {
        $request->merge(['status' => 'Active', 'services' => implode("|", $request->input('services'))]);
        Tour::create($request->all());
        $response = ['message' => 'Created '.$request->input('name').' tour successfully!', 'status' => 'success'];
        return redirect(route('show_list_tours'))->with($response);
    }

    public function listTour(Request $request)
    {
        if($request->ajax()){
        }
            $tours = Tour::all();
            return response(['data' => $tours]);
    }
}
