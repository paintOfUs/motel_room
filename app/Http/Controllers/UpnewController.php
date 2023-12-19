<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest3;
use Illuminate\Support\Facades\Auth;
use App\Models\post;
use Illuminate\Support\Facades\Hash;
class UpnewController extends Controller
{
    public function index(){
        if (Auth::id()>0) {
            return view('upnew');
        }
        return redirect()->route('login')->with('', 'Bạn phải đăng nhập để có thể đăng tin.');
    }

    public function doupnew(AuthRequest3 $request){
        post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'categories' => $request->input('categories'),
            'street' => $request->input('street'),
            'district' => $request->input('district'),
            'city' => $request->input('city'),
            'area' => $request->input('area'),
            'cost' => $request->input('cost'),
            'contact_person' => $request->input('contact_person'),
            'phone' => $request->input('phone'),
            'img' => $request->input('img'),
        ]);
        return redirect()->route('home')->with('success', 'Bạn đã đăng tin thành công, làm mới trang để hiển thị.');
    }
}
