<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class AuthenticatedController extends Controller
{
    public function index()
    {
        // $category = Category::orderBy('created_at','desc')->get();
        //    $count = Category::all()->count();   
        // return view('post.index')->with('post',$posts)->with('count', $count);
        return view('pages.dashboard');
    }
    public function profile()
    {
        $user = Auth::user();
        $posts = $user->posts;
        return view('pages.profile')->with('posts',$posts)->with('user', $user);
    }

    public function authorProfile(Request $request, $id)
    {
        $user = User::find($id);
        $posts = $user->posts;
        return view('pages.profile')->with('posts',$posts)->with('user', $user);
    }
}
