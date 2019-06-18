@extends('layouts.master')

@section('title')
  Login Here!
@endsection

@section('header')
  Login Here!({{ $message }})
@endsection

@section('content')
  <form method="post" action="/users/authenticate">
    {{ csrf_field()}}

    <div class="form-element">
      <input type="text" placeholder="Username" name="username">
    </div>
    <div class="form-element">
      <input type="password" placeholder="Password" name="password">
    </div>
    <div class="actions">
      <button type="submit">Login</button>
      <a href="/public/register">Register</a>
    </div>
  </form>
@endsection
