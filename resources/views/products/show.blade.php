@extends('layouts.app')
@section('content')
<a href="/products" class="btn btn-default">GO Back</a>
    <h1>{{$product->title}}</h1>
    <img alt="Thumbnail [225x225]" class="card-img-top" style="width:50%" src="/storage/cover_images/{{$product->cover_image}}">
    <br><br>
        <div>
            <p>Price:  {{$product->price}}$</p>
        </div>
        <hr>
    <div>
        {!!$product->body!!}
    </div>
    <hr>
    <small>Written on {{$product->created_at}} by {{$product->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @csrf
        @if(Auth::user()->admin==1 ||Auth::user()->employee==1)
            <a href="/products/{{$product->id}}/edit" class="btn btn-success">Edit</a>

            {!!Form::open(['action' => ['ProductsController@destroy', $product->id],'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            @endif
            <!-- Reviews -->
            <h1>Leave a review</h1>
            {!! Form::open(['action'=>'ReviewsController@store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">        
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
                </div>
                <div class="form-group">        
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', '', ['class'=>'form-control', 'id'=>'body', 'placeholder'=>'Body Text'])}}
                </div>
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                {{ Form::hidden('product_id', $product->id) }}
            {!! Form::close() !!}
            <div>
        
    @endif
    @if(count($reviews))
    <div class="album py-bg-light">
        <div class="container">
                @foreach($reviews as $review)
                <div class="row" >
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">{{$review->title}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Written on: {{$review->created_at}}</h6>
                                <p class="card-text">{{$review->body}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection