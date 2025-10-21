<?php
use App\Models\Post;
use Carbon\Traits\ToStringFormat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('post_details' , function() {
    $post = Post::findOrFail(request('id'));
    return view('post_details' , ['required_post' => $post]);
});


Route::get('app', function () {
    return view('template.app');
});

Route::get('post_create', function() {
    return view('post_create');
});

Route::post('posts', function() {
    $author = request('author');
    $title = request('title');
    $content = request('content');
    
    $post = new Post();
    $post->title = $title;
    $post->content = $content; 
    $post->author = $author; 
    $post->user_id = 1; 
    $post->save();

    return redirect('post_list');
});

Route::get('post_list' , function() {
    $posts = Post::all();
    return view('post_list' , ['posts' => $posts]);

});