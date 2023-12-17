<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function index()
    {
        return view('Dashboard.admin',['page'=>1]);
    }
    public function page(Request $request){
        $page = $request->input('selectedPage');

        // Chuyển hướng về trang form
        return view('Dashboard.admin',['page'=>$page]);
    }

    public function edit($id){
        $user = User::find($id);
        $page = 5;
        // Truyền biến $user vào view để bạn có thể sử dụng nó trong trang sửa
        return view('Dashboard.admin',['page'=>$page,'user'=>$user]);
    }

    public function create(){
        // Truyền biến $user vào view để bạn có thể sử dụng nó trong trang sửa
        return view('Dashboard.admin',['page'=>2]);
    }

    public function remove($id){
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('admin')->with('success', 'Người dùng đã được xóa thành công.');
        } else {
            return redirect()->route('admin')->with('error', 'Không tìm thấy người dùng.');
        }
    }

}
