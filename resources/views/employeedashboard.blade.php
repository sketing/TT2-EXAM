@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Employee Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 class= "text-center">Products</h3>
                    <hr>
                    <div class= "text-center">
                    <a href="/products/create" class="btn btn-primary text-center">Create Product</a>
                    </div>
                    <hr>
                    
                    <h4 class= "text-center">List of all products</h4>
                    <table class="table table-stiped">
                        <tr>
                            <th>Title</th>
                            <th> </th>
                            <th style="text-align:right">Actions</th>
                        </tr>
                        @include('inc.dashproducts')
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection