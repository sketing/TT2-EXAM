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
                    <h4 class= "text-center">Products</h4>
                    <div id='toolbar' class="mb-2">
                        <div class='wrapper text-center'>
                            <div class="btn-group" role="group">
                                    <a href = "/products" class=" btn btn-success">All Products</a>
                                    <a href="/products/create" class="btn btn-primary text-center">Create Product</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class= "text-center">List of Your minions</h4>
                    <table class="table table-stiped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Actions</th>
                                <th>employee</th>
                                <th>admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('inc.dashusers')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection