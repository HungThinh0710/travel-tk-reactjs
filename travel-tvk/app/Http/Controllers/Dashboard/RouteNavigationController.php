<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteNavigationController extends Controller
{
    public function login()
    {
        if(Auth::guard('admin')->check())
           return redirect(route('show_dashboard'));
        else
            return view('dashboard.login');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function listTour()
    {
        return view('dashboard.tours.list-tour');
    }

    public function addTour()
    {
        return view('dashboard.tours.add-tour');
    }
}
