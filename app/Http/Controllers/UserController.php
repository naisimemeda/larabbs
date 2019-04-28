<?php

namespace App\Http\Controllers;

use App\Http\Requests\Web\UserRequests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function register(UserRequests $request){
        User::create($request->all());
    }
}
