@extends('layouts.app')
@section('content')
<a href="/products" class="btn btn-default">GO Back</a>
    <h1>{{$product->title}}</h1>
    <div>
        {!!$product->body!!}
    </div>
    <hr>
    <small>Written on {{$product->created_at}} by {{$product->user->name}}</small>
    <hr>
    @if(!Auth::guest())
    <a href="/products/{{$product->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['ProductsController@destroy', $product->id],'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
@endsection