@extends('template.app')
@section('section1')

<form method="POST" enctype="multipart/form-data" action="post_upd/{{ $required_post->id }}">
    @csrf
    <label for="name">Author</label>
    <input type="text" name="author" id = "author" value="{{ $required_post->author }}"/>
    
    <br><br>
    <label for="title">Title</label>
    <input type="text" name="title" id = "title" value = "{{ $required_post->title }}"/>
    
    <br><br>
    <label for="content">Post</label>
    <textarea name="content" id="content">{{ $required_post->content }}</textarea>
    
    <br><br>
     <label for="img">post image : </label>
     <input type="file" name="img"  id="img"/>
    <br><br>
    <button type="submit" style="cursor:pointer;">Update</button>
</form>



@endsection