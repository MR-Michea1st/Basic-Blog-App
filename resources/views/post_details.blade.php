@extends('template.app')
@section('section1')
  <div style="border:2px solid black; padding:10px; margin:10px; border-radius: 10px; box-shadow:1px 1px 1px 1px black">
    <h1 style="font-size:20px;">Title : {{ $required_post->title }}</h1>
    <h1>Author: {{ $required_post->author }}</h1>
    <p style="display: flex; justify-content: center;">Content : {{ $required_post->content }}</p>

    <!-- <p>date of publish : {{ $required_post->created_at }}</p> -->
  </div>
@endsection