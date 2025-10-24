<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showRegister() {
       return view('register');
    }

    function storeUser() {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('pass'));
        $user->save();
        Auth::loginUsingId($user->id);
        return redirect('post_list');
    }

    function showLogin() {
        return view('login');
    }

    function loginUser() {
        $email = request('email');
        $password = request('pass');
        $user = Auth::attempt( ['email' => $email, 'password'=> $password]);
        if ($user) {
            return redirect('post_list');
        }
        return redirect('login');
    }

    function logout() {
        Auth::logout();
        return redirect('login'); 
    }   
    
}
