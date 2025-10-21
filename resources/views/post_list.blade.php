@extends('template.app')
@section('section1')

@foreach ($posts as $post)
  <div style="border:2px solid black; padding:10px; margin:10px; border-radius: 10px; box-shadow:1px 1px 1px 1px black">
    <p>post id : {{ $post->id }}</p>
    <h1 style="font-size:20px"> {{ $post->title }}</h1>
    <p style="display: flex; justify-content: center;">{{ $post->content }}</p>
  </div>
  
@endforeach
  <form method="POST" action="post_details">
    @csrf
    <label for = "id"> get specific post : </label> 
    <input type="number" name="id" id="id">
    <button type="submit" style="padding:7px; display:flex; justify-self: flex-start; cursor:pointer; margin:10px;">get details</button>
   </form>
@endsection