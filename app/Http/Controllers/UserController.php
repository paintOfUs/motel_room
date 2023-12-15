<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    public function index(){

    }

    public function update(Request $request, $id){
        $user =  User::find($id);
        $user->user_name = $request->user_name;
        $user->sex = $request->sex;
        $user->email = $request->email;
        //$user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->phone = $request->phone;

        if ($request->hasFile('img')) {
            $fileName = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/images', $fileName);
            $user->img = $fileName;
        }

        $user->save();

        return redirect()->route('admin')->with([
            'message' => 'User added successfully!', 
            'status' => 'success'
        ]);

    }
}
