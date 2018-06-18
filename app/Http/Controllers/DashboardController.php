<?php

namespace Unleashed\Http\Controllers;

use Illuminate\Http\Request;
use Unleashed\User;
use Unleashed\Product;
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
        if(Auth::user()->admin == 0 && Auth::user()->employee == 0){
            return redirect('/user/'.Auth::user()->id);
        }
        elseif(Auth::user()->admin == 1){
            return view('admindashboard')->with('products', $products)->with('users', $users);
        }
            
        elseif(Auth::user()->employee == 1){
            return view('employeedashboard')->with('products', $products);
        }
            
        elseif(Auth::guest()){
            return redirect('/')->with('error', 'Unauthorized Page');
        }

    }
}
