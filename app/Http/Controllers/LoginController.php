<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('login',[
            'title' => 'Đăng nhập'
        ]);
    }

    public function doLogin(Request $request){
        $email = $request->input('email');
        // Kiểm tra mật khẩu
        $password = $request->input('password'); // Điều này giả sử mật khẩu được gửi từ form

        // Kiểm tra mật khẩu và email
        if ($password === '123' && $email == 'admin@gmail.com') {
            // Nếu mật khẩu và email đúng, chuyển hướng đến trang admin
            return redirect()->route('admin');
        } else {
            // Nếu mật khẩu không đúng, trở về trang login và trả về thông báo
            return redirect('/login')->with('error', 'Mật khẩu không đúng');
        }

    }

}
