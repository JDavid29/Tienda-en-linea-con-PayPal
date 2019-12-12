<?php

namespace App\Http\Controllers;

use App\http\Requests;
use App\http\Controllers\Controller;
use App\Producto;

class StoreController extends Controller
{
    public function index(){
    	$productos = Producto::all();
    	//dd($productos);
    	//return "hola mundo";

    	return view('store.index', compact('productos'));
    }

    public function show($ficha){
    	$producto = Producto::where('ficha', $ficha)->first();
    	//dd($producto);

    	return view('store.show', compact('producto'));
    }
}
