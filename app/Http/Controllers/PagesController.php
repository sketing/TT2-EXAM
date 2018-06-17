<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the Shop';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function basket(){
        return view('pages.basket');
    }

    public function checkout(){
        return view('pages.checkout');
    }

    public function product(){
        return view('pages.product');
    }

    public function register(){
        return view('pages.register');
    }

    public function user(){
        return view('pages.user');
    }

    public function login(){
        return view('pages.login');
    }
}
/*
    public function shop(){
        $data = array(
            'title' => 'Items',
            'items' => ['item 1', 'item 2', 'item 3','4','5','6','7',],
        );
        return view('pages.shop')->with( $data);
    }
*/