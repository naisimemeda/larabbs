<?php

namespace App\Http\Controllers;

use App\Http\Requests\Web\UserRequests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register(Request $request){
        User::create($request->all());
    }

    public function login(Request $request){
        $token  = Auth::guard()->attempt(['email'=>$request->email,'password'=>$request->password]);
        return redirect('/');
    }
}
