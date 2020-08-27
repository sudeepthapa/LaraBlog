<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        $posts = Post::orderBy('created_at','desc')->get();
        $count = Post::all()->count();   
        return view('pages.profile')->with('posts',$posts)->with('count', $count);
    }
}
