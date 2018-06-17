<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Product;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users['users'] = \App\User::all(); 
        $products['product'] = \App\Product::all();
        if(Auth::user()->admin == 0)
            return view('dashboard')->with('products', $products);
        elseif(Auth::user()->admin == 1)
            return view('admindashboard')->with('products', $products, $users);
        elseif(Auth::user()->employee == 1)
            return view('employeedashboard')->with('products', $products);

    }
}
