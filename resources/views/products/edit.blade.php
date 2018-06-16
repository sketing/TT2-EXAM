@extends('layouts.app')
@section('content')
    <h1>Create Product</h1>
    {!! Form::open(['action'=> ['ProductsController@update', $product->id], 'method' => 'POST']) !!}
        <div class="form-group">        
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $product->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class="form-group">        
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $product->body, ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body Text'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection