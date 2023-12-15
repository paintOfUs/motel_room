<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function index()
    {
        if (Auth::id()>0) {
            $user = Auth::user();
            if($user->role==0){
                return redirect()->route('admin');
            }else{
                return redirect()->route('home')->with('info','Bạn không cần phải đăng nhập nữa');
            }
        }
        return view('login');
    }

    public function login(AuthRequest $request)
    {

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        $rememberMe = $request->has('remember_me')?true:false;
        if (Auth::attempt($credentials)) {
            // //Kiểm tra role sau khi xác thực
            $user = Auth::user();
            if ($rememberMe==true){
                setcookie('email', $request->input('email'), time()+ 300);
                setcookie('password', $request->input('password'), time()+ 300);
                
            }else{
                setcookie( "email", "", time()- 60);;
                setcookie( "password", "", time()- 60);
                
            }
            if ($user->role == 0) {
                return redirect()->route('admin')->with('success','Đăng nhập thành công');
            } else {
                return redirect()->route('home')->with('success','Đăng nhập thành công');
            }
            
        }
        // Chuyển hướng về trang đăng nhập mà không cần thông báo lỗi
        return redirect()->route('login')->with('error','Đăng nhập Thất bại');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('login');
    }

}
