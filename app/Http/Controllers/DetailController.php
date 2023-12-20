<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id){
        $post = post::find($id);
        $latePosts = post::latest()->take(3)->get();
        //dd($latePosts);
        return view("detail",['post'=>$post, 'latePosts'=>$latePosts]);
    }


}
