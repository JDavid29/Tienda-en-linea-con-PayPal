<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('/home');

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

Route::get('cart/delete/{producto}', [
	'as'=>'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as'=>'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{producto}/{quantity?}', [
	'as'=>'cart-update',
	'uses' => 'CartController@update'
]);

//RUTA DEL CORREO FORMULARIO Y FUNCION CON SENDGRD
Route::resource('/correo','MessageController');


Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
  ]);


// Authentication routes...
/*Route::get('auth/login', [
	'as'=> 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('auth/login', [
	'as'=> 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);
Route::get('auth/logout', [
	'as'=> 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('auth/register', [
	'as'=> 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
	'as'=> 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);
*/

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

// ENVIAMOS NUESTRO PEDIDO A PAYPAL
Route::post('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));
// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));
