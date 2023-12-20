<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest3;
use Illuminate\Support\Facades\Auth;
use App\Models\post;
use Illuminate\Support\Facades\Hash;

class YourNewsController extends Controller
{
    public function newsdetail(){
        return view('yournews');
    }
}
