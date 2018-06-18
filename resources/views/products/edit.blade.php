@extends('layouts.app')
@section('content')
    <h1>Create Product</h1>
    {!! Form::open(['action'=> ['ProductsController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group"> 
            <!--Title-->       
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $product->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class="form-group">   
            <!--Body-->         
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $product->body, ['id'=>'body', 'class'=>'form-control', 'placeholder'=>'Body Text'])}}
        </div>
        <div class="form-group">
            <!--File--> 
            {{Form::file('cover_image')}}
        </div>
        <div class="btn-toolbar float-left" role="toolbar">
            <div class="btn-group" role="group">
                <div class="btn">
                    <!--Submit Button-->
                    {{Form::hidden('_method', 'PUT')}}
                    {{form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    <div class="btn-toolbar float-right mr-2" role="toolbar">
        <div class="btn-group" role="group">
            <!--Delete Button-->
            {!!Form::open(['action' => ['ProductsController@destroy', $product->id],'method' => 'POST', 'class' => ''])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
    </div>
    
@endsection