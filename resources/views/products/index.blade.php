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
        <div class="card mb-4 box-shadow">
            <a href="/products/{{$product->id}}">
                <img alt="Thumbnail [225x225]" class="card-img-top" style="width:100%" src="/storage/cover_images/{{$product->cover_image}}">
            </a>
            <div class="card-body">
            <p class="card-text">{{$product->title}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="/products/{{$product->id}}" class="btn btn-sm btn-outline-secondary">
                        View
                    </a>
                    @if(Auth::user()->admin == 1 || Auth::user()->employee == 1)
                        <a href="/products/{{$product->id}}/edit" class="btn btn-sm btn-outline-secondary">
                            Edit
                        </a>
                    @endif
                    </div    
                    <small class="text-muted ">PRICE: {{$product->price}}€</small>
                </div>
            </div>
        </div>
        </div>
    @endforeach
    </div>
    </div>
    </div>
    </div class="row">
            {{$products->links()}}
    </div>
</div>
    
    @endif
@endsection