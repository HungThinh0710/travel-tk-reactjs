<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function home()
    {
        return view('client.index');
    }

    public function news()
    {
        return view('client.news');
    }

    public function tours()
    {
        return view('client.tours');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function login()
    {
        if(Auth::check()) return redirect(route('show_profile'));
        else return view('client.login');
    }

    public function profile()
    {
        return view('client.profile');
    }
}
