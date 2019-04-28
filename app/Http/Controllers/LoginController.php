<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $user = Auth::guard()->attempt(['email'=>$request->email,'password'=>$request->password]);
        if($user){
            return redirect('/');
        }
        session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
        return redirect()->back()->withInput();
    }

    public function logout(){
        $this->guard()->logout();
        return redirect('/');
    }
}
