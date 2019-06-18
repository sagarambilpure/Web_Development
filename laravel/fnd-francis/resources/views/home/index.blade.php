@extends('layouts.master')

@section('title')
  Home
@endsection

@section('header')
  Welcome {{session('user') -> username }}&nbsp;
  <a href="/logout">Logout</a>
@endsection

@section('content')
  Welcome To The Home Page
  <div class="menu-links">
    <a href="/users">Friends</a>
  </div>
@endsection
