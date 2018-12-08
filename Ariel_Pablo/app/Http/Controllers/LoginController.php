<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function login(){
    return view('login.login');
  }
  public function autenticar(Request $request){
    $credenciales = $request->only('user','password');
    if(Auth::attempt($credenciales)){
      return redirect()->intended();
    }else{
      return redirect('/login')->withErrors('Usuario/Contraseña incorrecta');
    }
  }

  public function logout(){
    Auth::logout();
    return redirect('/');
  }
}
