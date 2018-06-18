@extends('layouts.app')

@section('title')
    Shopping Basket
@endsection

@section('content')
    @if(Session::has('basket'))
        <div class="row" style="width: 200%">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <div class="text-right">
                                <span class="label label-success">{{ $product['price'] }}€</span>
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Remove 1</a></li>
                                            <li><a href="#">Remove All</a></li>
                                        </ul>
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}€</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="/checkout" type="button" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Basket!</h2>
            </div>
        </div>
    @endif
@endsection