@extends('layouts.master')

@section('title')
    Login
@endsection

@section('body')
    <form action="/action_page.php">
        <h1>Login</h1></br>
        Email: <input type="text" name="email"><br>
        Password: <input type="text" name="password"><br>
        <input type="submit" value="Submit">
    </form>
@endsection