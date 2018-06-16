@extends('layouts.app')
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