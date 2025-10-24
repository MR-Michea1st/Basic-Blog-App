@extends('template.app')
@section('section1')
   <form action="register" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="name">Name: </label>  <input type="text" name="name" id="name" /> <br/><br/>
        <label for="email">Email: </label> <input type="email" name="email" id="email" /> <br/><br/>
        <label for="pass">Password: </label> <input type="password" name="pass" id="pass"/> <br/><br/>
        <button type="submit">Register</button>
   </form>

@endsection