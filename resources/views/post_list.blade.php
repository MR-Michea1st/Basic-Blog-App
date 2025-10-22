@extends('template.app')
@section('section1')

@foreach ($posts as $post)
  <div style="border:2px solid black; padding:10px; margin:10px; border-radius: 10px; box-shadow:1px 1px 1px 1px black">
    <p>post id : {{ $post->id }}</p>
    <h1 style="font-size:20px"> {{ $post->title }}</h1>
    <p style="display: flex; justify-content: center;">{{ $post->content }}</p>
    <form action="" method="get">
      <button style="padding:5px; cursor: pointer; display: flex; justify-items:flex-end;">
        <a style="text-decoration: none; color:black"  href="post_list/{{$post->id}}">details</a>
      </button>
    </form>
  </div>
  
@endforeach
@endsection