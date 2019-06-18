<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
  public function login() {
    $hour = date('H') + 4;
    $message = '';

    if($hour > 0 and $hour < 12)
    {
      $message = 'Good Morning';
    }
    elseif ($hour > 12 and $hour < 16) {
    $message = 'Good Afternoon';
    }
    else {
    $message = 'Good Night';
    }
    return view('public.login',compact('message'));
  }

  public function register() {
    $countries = [
      'India',
      'USA',
      'China',
      'Australia'
    ];

    return view('public.register',compact('countries'));
  }
}
