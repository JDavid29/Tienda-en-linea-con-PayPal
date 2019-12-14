<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct(){
    	if(!\Session::has('cart')) \Session::put('cart', array());
    }
    //MOSTRAR CARRITO
    public function show(){
    	$cart = \Session::get('cart');
    	return view('store.cart', compact('cart'));
    }
    //AÑADIR ELEMENTOS
    public function add(Producto $producto){
    	$cart = \Session::get('cart');
    	$producto->quantity = 1;
    	$cart[$producto->ficha] = $producto;

    	\Session::put('cart', $cart);
    	return redirect()->route('cart-show');
    }
    //BORRAR ELEMENTOS DEL CARRITO
    //ACTUALIZAR ELEMENTOS
    //VACIAR EL CARRITO
    //OBTENER EL TOTAL DEL CARRITO
}
