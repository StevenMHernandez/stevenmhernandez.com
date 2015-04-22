@extends('auth.layout')

@section('content')
<h1>Login</h1>
<form method="post" action="{{route('login.attempt')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <label for="email">Email.</label>
    <input id="email" name="email" required="" type="text">
    <label for="password">Password.</label>
    <input id="password" name="password" required="" type="password">
    <input value="Login." type="submit">
</form>
@stop