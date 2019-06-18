<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class UserController extends Controller
{
  public function save_user()
  {
    //collect fotm data from the request
    //dd(request() -> all());
    //$params_list = request(['username','password','gender','country']);

    $p = new Person;
    $p -> username = request('username');
    $p -> password = request('password');
    $p -> gender = request('gender');
    $p -> country = request('country');

    $p -> save();
    //save this data in the database

    //take the user to login page

    return redirect('/public/login');
  }

  public function authenticate()
  {
    $username = request('username');
    $password = request('password');

    $l = Person::where('username', $username) -> where('password', $password)->get();
    if(count($l) > 0 ){
      session([
        "user" => $l[0]
      ]);
      return redirect('/home');
    }else {
      return redirect('/public/login');
    }
  }

  public function listUsers()
  {
    $id=  session('user') ->id;
    $people = Person::where('id','!=',$id) -> get();
    return view('users.list',compact('people'));
  }

    public function logout()
    {
      session() -> flush();
      return redirect('/public/login');
    }
}
