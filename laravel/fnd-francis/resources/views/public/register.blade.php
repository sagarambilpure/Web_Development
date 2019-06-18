@extends('layouts.master')

@section('title')
  Register Dead Poolites
@endsection

@section('header')
  Register Here!
@endsection

@section('content')
  <form method="post" action="/users">
    {{ csrf_field()}}

    <div class="form-element">
      <input type="text" name="username" placeholder="Username">
    </div>
    <div class="form-element">
      <input type="password" name="password" placeholder="Password">
    </div>
    <div class="from-element">
      <label>Gender</label>
      <div class="radio-container">
        <span>
          <input id="male" type="radio" name="gender" value="m">
          <label for="male">Male
        </span>
        <span>
          <input id="female" type="radio" name="gender" value="f">
          <label for="female">Female
        </span>
        <span>
          <input id="others" type="radio" name="gender" value="o">
          <label for="others">Others
        </span>
      </div>
    </div>
    <div class="form-element country-container">
      <label for="country_opt">Country</label>
      <select id="country_opt" name="country">
        @foreach ($countries as $country)
          <option>{{ $country }}</option>
        @endforeach
      </select>
    </div>
    <div class="actions">
      <button type="submit">Register</button>
    </div>
  </form>
@endsection
