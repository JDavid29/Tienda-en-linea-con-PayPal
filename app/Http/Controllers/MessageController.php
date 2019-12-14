<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //
    public function index()
    {
        return view('correo.correo');
    }

    public function store(Request $request){
    	//validamos los elementos del formulario
        //guardamos los datos en una variable
        $mensaje = $request->validate([
            'nombre'=> 'required',
            'email' =>'required|email',
            'asunto'=> 'required',
            'mensaje'=> 'required|min:3'
        ], [
        	'name.required' =>__('I need your name')
        ]); //que nombre y descripcion no venga vacio

        //para enviar email e import presione F5
        //php artisan make:mail MessageReceived F5 <-------en consola
        Mail::to('jose.david.jaa@gmail.com')->send(new MessageReceived($mensaje));//la pasamos la variable al constructor
        //Mail::to('jose.david.jaa@gmail.com')->queue(new MessageReceived);

        //redirigimos a la pagina anterior
        return back()->with('mensaje', 'Correo Electronico Enviado!');//back te vuelve atras pero con los datos que guardaste mas un mensaje por encima del formulario
    }
}
