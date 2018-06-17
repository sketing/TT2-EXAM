@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>
                <div class="card-body">
                    <form method="post" action="/user/{{$user->id}}/update">
                        @csrf
                        {{ method_field('patch') }}
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                            <div class="col-md-6">
                                <input class="form-control" id="username" type="text" name="username"  value="{{ $user->username }}" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="name">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name"  value="{{ $user->name }}" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="surname">Surname</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="surname"  value="{{ $user->surname }}" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="email">Email</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email"  value="{{ $user->email }}" />
                            </div>
                        </div>
                        <!-- 
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        -->
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="password">Password</label>
                                <div class="col-md-6">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="confirm_password">Confirm password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation" />
                            </div>
                        </div>
                        <!-- --> 
                        @if(Auth::user()->admin == 1 )
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="employee-select">Employee</label>
                                <div class="col-md-6">
                                <select name="employee" type="employee" class="form-control" id="employee-select">
                                    <option value="1" @if($user->employee==1) selected @endif>Yes</option>
                                    <option value="0" @if($user->employee==0) selected @endif>No</option>
                                </select> 
                            </div>
                        </div>  
                        @endif
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection