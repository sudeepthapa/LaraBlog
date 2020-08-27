<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->get();
        $count = Post::all()->count();   
        return view('pages.homepage')->with('posts',$posts)->with('count', $count);
    }
}
