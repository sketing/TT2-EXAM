<?php

namespace Unleashed\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Unleashed\Product;
use Unleashed\Basket;

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

    public function getAddToBasket(Request $request, $id)
    {
        $product = Product::find($id);
        $oldBasket = Session::has('basket') ? Session::get('basket') : null;
        $basket = new Basket($oldBasket);
        $basket->add($product, $product->id);
        $request->session()->put('basket', $basket);
        return redirect()->route('products.index');
    }

    public function getReduceByOne($id) {
        $oldBasket = Session::has('basket') ? Session::get('basket') : null;
        $basket = new Basket($oldBasket);
        $basket->reduceByOne($id);
        if (count($basket->items) > 0) {
            Session::put('basket', $basket);
        } else {
            Session::forget('basket');
        }
        return redirect()->route('products.basket');
    }

    public function getBasket()
    {
        if(!Session::has('basket'))
        {
            return view('products.basket');
        }
        $oldBasket = Session::get('basket');
        $basket = new Basket($oldBasket);
        return view('products.basket', ['products' => $basket->items, 'totalPrice' => $basket->totalPrice]);
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