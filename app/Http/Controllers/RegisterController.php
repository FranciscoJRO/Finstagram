<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function index() 
   {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('username'));

        //Validacion
        $this->validate($request, [
        'name' => 'required|max:45|min:2',
        'username' => 'required|unique:users|min:3|max:30', //unique para que no haya 2 cuentas iguales
        'email' =>'required|unique:users|email|max:60',
        'password' => 'required'

    ]);
    }

    
}
