<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog extends Controller
{
    //
    public function create(){
        return view('create');
    }
    public function store(Request $request){
      $this->validate($request,[
          "name"             => "required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/",
          "email"            => "required|email",
          "password"         => "required|min:6",
          "adress"           => "required|max:10",
          "flexRadioDefault" => "required",
          "url"              => "required|url"

      ]);
      echo 'Valid Data';
    }
}
