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

    public function services(){
        $data = array(
            'title' => 'Services' ,
            'services' => ['Selling Stuff', 'Star Wars']
        );
        return view('pages.services')->with( $data);
    }

    public function basket(){
        return view('pages.about');
    }

    public function employee_addProduct(){
        return view('pages.employee_addProduct');
    }
    
    public function employee_editProduct(){
        return view('pages.employee_editProduct');
    }

    public function employee(){
        return view('pages.employee');
    }

    public function product(){
        return view('pages.product');
    }

    public function register(){
        return view('pages.register');
    }

    public function shop(){
        return view('pages.shop');
    }

    public function user(){
        return view('pages.user');
    }
}
