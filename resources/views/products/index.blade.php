<!--
{{--@extends('layouts.app')
@section('content')
    <h1>Post</h1>
    @if(count($products)>0)
        @foreach($products as $product)
            <div class="well">
            <a href="/products/{{$product->id}}"><h3>{{$product->title}}</h3></a>
            <small>Written on {{$product->created_at}}</small>
            </div>
        @endforeach
        {{$products->links()}}
    @else
        <p>NONE FOUND</p>
    @endif
@endsection
--}}
-->

@extends('layouts.app')
@section ('content')
    @if(count($products)>0)
    <div class="album py-bg-light">
    <div class="container">
    <div class="row" >
    @foreach($products as $product)
        <div class="col-md-4">
        <div class="card mb-4 box-shadow" style="height: 400px">
            <a class="text-center" href="/products/{{$product->id}}">
                <img alt="Thumbnail [225x225]" class="card-img-top" style="max-height: 75%; max-width: 75%;" src="/storage/cover_images/{{$product->cover_image}}">
            </a>
            <div class="card-body" style="position:absolute; bottom:0;">
            <p class="card-text">{{$product->title}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="/products/{{$product->id}}">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </a>
                        @if(!Auth::guest())
                            <a href="{{ route('product.getAddToBasket', ['id' => $product->id]) }}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                            </a>
                         @else
                            <a href="/login">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                            </a>
                        @endif
                        @if(!Auth::guest())
                            @if( Auth::user()->admin == 1 || Auth::user()->employee == 1)
                            <a href="/products/{{$product->id}}/edit">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </a>
                            @endif 
                        @endif
                    </div>
                    <small class="text-muted ">PRICE: {{$product->price}}€</small>
                </div>
            </div>
        </div>
        </div>
    @endforeach
    </div>
    </div>
    </div>
    <div class="row">
            {{$products->links()}}
    </div>
    
    @endif
@endsection