<?php

Route::bind('producto', function($ficha){
	return App\Producto::where('ficha', $ficha)->first();
});

Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('producto/{ficha}', [
	'as' => 'producto-detalle',
	'uses' => 'StoreController@show'
]);

//CARRITO ---------
Route::get('cart/show', [
	'as'=>'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{producto}', [
	'as'=>'cart-add',
	'uses' => 'CartController@add'
]);

//RUTA DEL CORREO FORMULARIO Y FUNCION
Route::resource('/correo','MessageController');