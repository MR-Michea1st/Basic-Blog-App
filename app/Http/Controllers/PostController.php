<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    function index() {
         $posts = Post::all();
        return view('post_list' , ['posts' => $posts]);
    }
    function create() {
        return view('post_create');
    }

    function store(Request $request) {
        $author = request('author');
        $title = request('title');
        $content = request('content');
        $img = request()->file('img');
        
        // request()->validate([
        //     'email' => 'email|required',
        //     'title' => 'required|string|min:5',
        // ]);
        
        $img_path = $img->store('assets/images' , 'public');


        $post = new Post();
        $post->title = $title;
        $post->content = $content; 
        $post->author = $author; 
        $post->user_id = Auth::user()->id; 
        $post->img = $img_path; 
        $post->save();

        return redirect('post_list');
    }

    function show($id) {
        $post = Post::findOrFail($id);
        return view('post_details' , ['required_post' => $post]);
    }

    function editPost($id) {
        $post = Post::findOrFail($id);
        return view('post_edit' , ['required_post' => $post]);
    }

    function update($id) {

        $post = Post::findOrFail($id);
        $post->title = request('title');
        $post->content = request('content'); 
        $post->author = request('author');  
        // dd(request('title'));
        $post->img = request()->file('img')->store('assets/images' , 'public'); 
        $post->save();        

        return redirect('post_list');
    }

    
}
