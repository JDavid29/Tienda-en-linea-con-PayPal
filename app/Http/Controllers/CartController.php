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
        $total = $this->total();
    	return view('store.cart', compact('cart', 'total'));
    }
    //AÑADIR ELEMENTOS
    public function add(Producto $producto){
    	$cart = \Session::get('cart');
    	$producto->quantity = 1;
    	$cart[$producto->ficha] = $producto;

    	\Session::put('cart', $cart);
    	return redirect()->route('cart-show');
    }
    //BORRAR ELEMENTOS DEL CARRITO----------------
    public function delete(Producto $producto){
        $cart = \Session::get('cart');
        unset($cart[$producto->ficha]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    //ACTUALIZAR ELEMENTOS                     --->OJO
    public function update(Producto $producto, $quantity){
        $cart = \Session::get('cart');
        $cart[$producto->ficha]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    //VACIAR TODO EL CARRITO
    public function trash(){
        \Session::forget('cart');//borramos todo lo q haya en esa variable

        return redirect()->route('cart-show');
    }
    //OBTENER EL TOTAL DEL CARRITO
    private function total(){
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->precio * $item->quantity;
        }
        return $total;
    }

    //      DETALLE DEL PEDIDO
    public function orderDetail(){
        if(count(\Session::get('cart')) <= 0) return redirect()->route('home');
        $cart = \Session::get('cart');

        $total = $this->total();
        return view('store.partials.order-detail', compact('cart', 'total'));
    }

}
