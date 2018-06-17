@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/products/create" class="btn btn-primary">CREATE</a>
                    <h3>You Products</h3>
                    <table class="table table-stiped">
                        <tr>
                            <th>Title</th>
                            <th> </th>
                            <th style="text-align:right;">Actions</th>
                        </tr>
                        @if(count($products)>0)
                            @foreach($products as $product)
                            <tr>
                            
                                    <td><a href="/products/{{$product->id}}">{{$product->title}}</a></td>
                                    <td> </td>
                                    <td> 
                                        <div class="btn-group float-right">
                                            <a href="/products/{{$product->id}}/edit" class="btn btn-success ">Edit</a>
                                            {!!Form::open(['action' => ['ProductsController@destroy', $product->id],'method' => 'POST', 'class' => ''])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                        <td> </td>
                        <td>
                        <p style="text-align: center;">You have no posts</P>
                        </td>
                        <td> </td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
