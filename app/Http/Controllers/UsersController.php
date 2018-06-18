<?php

namespace App\Http\Controllers;

use Auth;
use IsAdmin;
use Validator;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

    }

    public function edit($id)
    {   
        $auth = Auth::user();
        $user = User::find($id);
        if(Auth::user()->admin == 1  || Auth::user()->id === $user->id){
            return view('users.edit')->with('user', $user);
        }
        else {
            return redirect('/products')->with('error', 'Unauthorized Page');
        }
    }

    public function update(Request $request, $id)
    { 
        $this->validate($request, [
            'username' => 'required|string|min:6|max:50',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => "required|string|email|max:255|unique:users,email,$id",
            'password' => 'required|string|min:6|confirmed',
            'employee' => 'sometimes|boolean'
        ]);
        
        $user = User::find($id);
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        if(Auth::user()->admin == 1){
            $user->employee = $request->input('employee');
        }
        
            
        $user->save();

        return back();
    }
}