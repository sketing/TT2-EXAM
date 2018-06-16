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
            <img class="card-img-top" 
            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" 
            alt="Thumbnail [225x225]" 
            style="display: block; padding:0px; margin:0px;"
            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22208%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20208%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163edea88ef%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163edea88ef%22%3E%3Crect%20width%3D%22208%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2265.5%22%20y%3D%22117.9%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </a>
            <div class="card-body">
            <p class="card-text">{{$product->title}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="/products/{{$product->id}}">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </a>
                    <a href="/products/{{$product->id}}/edit">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </a>
                    </div>
                    <small class="text-muted">PRICE</small>
                    <small>Written on {{$product->created_at}} by {{$product->user->name}}</small>
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