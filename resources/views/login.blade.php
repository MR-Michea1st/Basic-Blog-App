@extends('template.app')
@section('section1')
    
<h2>Login Page</h2>
    
    <form action="login" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="email">Email: </label> <input type="email" name="email" id="email" /> <br/><br/>
        <label for="pass">Password: </label> <input type="password" name="pass" id="pass"/> <br/><br/>
        <button type="submit">Login</button>
    </form>


@endsection