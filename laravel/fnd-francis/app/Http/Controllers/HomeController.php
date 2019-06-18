<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      if (!session('user')){
        return redirect('/public/login');
      }
      return view('home.index');
    }
}
