@extends('layouts.app')
@section('content')
<a href="/products" class="btn btn-default">GO Back</a>
    <h1>{{$product->title}}</h1>
    <img alt="Thumbnail [225x225]" class="card-img-top" style="width:50%" src="/storage/cover_images/{{$product->cover_image}}">
    <br><br>
    <div>
        {!!$product->body!!}
    </div>
    <hr>
    <small>Written on {{$product->created_at}} by {{$product->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @csrf
        <a href="/products/{{$product->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['ProductsController@destroy', $product->id],'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        
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
        {!! Form::close() !!}
        <div>
    @endif
    <div class="card"> 
        <table>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->title }}</td>
                    <td>{{ $review->body }}</td>
                    <td>{{ $review->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection