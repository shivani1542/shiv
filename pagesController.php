<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{

 public function register()
 {
     return view('register');
 }


 public function register_action(Request $request)
 {
   
    $name=$request->input('name');
    echo'name:'.$name;
    echo'<br>';
    $uname=$request->input('uname');
    echo'username:'.$uname;
    echo'<br>';
    $password=$request->input('password');
    echo'password:'.$password;
    echo'<br>';
    $this->validate($request,['name'=>'required', 'uname'=>'required','password'=>'required' ]);
 }
}