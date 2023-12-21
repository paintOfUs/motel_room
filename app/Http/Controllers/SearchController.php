<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class SearchController extends Controller
{
    public function search(Request $request){
        $categories = $request->input('categories');
        $city = $request->input('city');
        $district = $request->input('district');
        $area = $request->input('area');
        $cost = $request->input('cost');
        $search = $request->input('search');

        $query = post::query();

        if ($categories &&$categories!='Danh mục') {
            $query->where('categories', 'LIKE', '%' . $categories . '%');
        }

        if ($city&& $city!='Tỉnh/Thành Phố') {
            $query->where('city', 'LIKE', '%' . $city . '%');
        }

        if ($district && $district!= 'Quận/Huyện') {
            $query->where('district', 'LIKE', '%' . $district . '%');
        }

        if ($area && $area!= 'Diện tích') {
            $query->where('area', 'LIKE', '%' . $area . '%');
        }

        if ($cost && $cost!= 'Mức giá') {
            $query->where('cost', '=', $cost);
        }
        if ($search && $search!= '') {
            $query->where('title', 'LIKE', "%{$search}%");
        }

        $posts = $query->get();
        $latestPosts = post::latest()->take(6)->get();
        return view('home', ['posts'=>$posts,'latestPosts'=> $latestPosts,'search'=>1]);
    }
}
