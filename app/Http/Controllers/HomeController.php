<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        if (Auth::user() && Auth::user()->user_type == '2') {
            return redirect('admin_dashboard');
        } else {
            return redirect('client_dashboard');
        }
    }
    
    public function home()
    {
        return view('home');
    }
}
