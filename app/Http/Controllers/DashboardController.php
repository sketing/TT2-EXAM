<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
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
        $products = Product::all();
        $users = User::all();
        if(Auth::user()->admin == 0 && Auth::user()->employee == 0)
            return redirect('/user/'.Auth::user()->id);
        if(Auth::user()->admin == 1)
            return view('admindashboard')->with('products', $products)->with('users', $users);
        else if(Auth::user()->employee == 1)
            return view('employeedashboard')->with('products', $products);

    }
}
