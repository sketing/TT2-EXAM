@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class= "text-center">
                    <a href="/products/create" class="btn btn-primary text-center">CREATE</a>
                    </div>
                    <hr>
                    <h3 class= "text-center">Products Created By You</h3>
                    <table class="table table-stiped">
                        <tr>
                            <th>Title</th>
                            <th> </th>
                            <th class="text-right">Actions</th>
                        </tr>
                        <tr>
                            <td> </td>
                            <td class="text-center">You are User</td>
                            <td> </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection