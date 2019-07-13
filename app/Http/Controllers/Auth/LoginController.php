<?php

namespace OGATA\Http\Controllers\Auth;

use OGATA\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    public function login()
    {
        $datos = $this->validate(request(),[
            'nombre' => 'required|string',
            'password' => 'required|string'
            // $this->username() => 'required|string',
             //$this->getAuthPassword() => 'required|string'

        ]);

         if(Auth::attempt(['nombre'=>$datos['nombre'] , 'password'=>$datos['password']])){
             return 'Tu sesion ha iniciado correctamente';
        }

    
       // if(Auth::attempt($credentials)){
         //   return "entro";
            //redirect()->route('dashboard');""
        else{

        return back()
            ->withErrors(['nombre' => 'Estas credenciales no coinciden con nuestros registros'])
            -> withInput(request(['nombre']));
       }}
    
    
}
