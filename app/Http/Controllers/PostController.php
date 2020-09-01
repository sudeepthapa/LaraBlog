<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Category;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
           $count = Post::all()->count();   
        // return view('post.index')->with('post',$posts)->with('count', $count);
        return view('home')->with('post',$posts)->with('count', $count);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // fetch all categories
        $categories = Category::all();

        //send to view
        return view('post.createpost',[
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title'=>'required | min:5',
            'body'=>'required',
            'photo'=>'required'
        ]);   

        // file handling
        $file_name = time().'_'.$request->file('photo')->getClientOriginalName();

        $file_path = $request->file('photo')->storeAs('photos', $file_name, 'public');
        
    
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->caption = $request->caption;
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category;
        // $post->likes = $request->likes;
        $post->photo = 'storage/'.$file_path;
        $post->save();

        return redirect()->route('home.profile')
            ->with('success','Contact Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required | min:5',
            'body'=>'required',
            'caption'=>'required',
            // 'likes'=>'required',
           
        ]);   

        $post = Post::find($id);

         if(isset($request->photo)){
             // file handling
             $file_name = time().'_'.$request->file('photo')->getClientOriginalName();;                                                                                          
             // $post->photo = $file_name;                                                                                                                      
             $file_path->$request->file('photo')->storeAs('photos', $file_name, 'public'); 
             $post->photo = 'storage/'.$file_path;
             unlink($post->photo);                                                                                                
         }else{
              $post->photo = $post->photo;
         }   

 
        $post->title = $request->title;
        $post->body = $request->body;
        $post->caption = $request->caption;
                                                                                                              

            // $file_path = $request->file('photo');                                                                                                              
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
