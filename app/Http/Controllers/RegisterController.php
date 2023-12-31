<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest2;
use App\Models\User;
use App\Models\post;

use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function index(){
        $latePosts = post::latest()->take(3)->get();
        return view('register', ['latePosts'=>$latePosts]);

    }

    public function register(AuthRequest2 $request){
        User::create([
            'user_name' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'role' =>1
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
