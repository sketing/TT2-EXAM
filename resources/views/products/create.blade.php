@extends('layouts.app')
@section('content')
    <h1>Create Product</h1>
    {!! Form::open(['action'=>'ProductsController@store', 'method'=>'POST']) !!}
        <div class="form-group">        
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class="form-group">        
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class'=>'form-control', 'id'=>'article-ckeditor', 'placeholder'=>'Body Text'])}}
        </div>
        {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection