@extends('layouts.app')
@section('content')
    <h1>Create Product</h1>
    {!! Form::open(['action'=>'ProductsController@store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">        
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class="form-group">        
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class'=>'form-control', 'id'=>'article-ckeditor', 'placeholder'=>'Body Text'])}}
        </div>
        <div class="form-group">        
                {{Form::label('price', 'Price')}}
                {{Form::text('price', '', ['class'=>'form-control', 'placeholder'=>'Price'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">        
                {{Form::label('amount_in_storage', 'In Storage')}}
                {{Form::text('amount_in_storage', '', ['class'=>'form-control', 'placeholder'=>'Amount in storage'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection