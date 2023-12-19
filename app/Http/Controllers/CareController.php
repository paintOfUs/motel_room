<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareController extends Controller
{
    public function care(){
        return view('care');
    }
}
