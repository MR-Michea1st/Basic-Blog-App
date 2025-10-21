@extends('template.app')
@section('section1')

<form method="POST" , action="posts">
    @csrf
    <label for="name">Author</label>
    <input type="text" name="author" id = "author"/>
    
    <br><br>
    <label for="title">Title</label>
    <input type="text" name="title" id = "title"/>
    
    <br><br>
    <label for="content">Post</label>
    <textarea name="content" id="content"></textarea>
    
    <br><br>
    <button type="submit">Submit</button>
</form>
@endsection('section1')