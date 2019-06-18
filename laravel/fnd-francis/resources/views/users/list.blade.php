@extends('layouts.master')

@section('title')
  Ur Friends
@endsection

@section('header')
  Welcome {{session('user') -> username }}
@endsection

@section('content')
  <div class="menu-links">
    <a href="#">Friends</a>
  </div>
  <div class="friends">
    <table>
      <tr>
        <th>Username</th>
        <th>Gender</th>
        <th>Country</th>
      </tr>
      @foreach($people as $person)
      <tr>
        <td>{{ $person-> username}}</td>
        <td>{{ $person-> gender}}</td>
        <td>{{ $person-> country}}</td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection
