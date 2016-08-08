<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Injeccion de Dependencias de productos
Route::bind('product', function($id){
	return App\Product::where('id', $id)->first();
});

//Injeccion de Dependencias de categorias
Route::bind('category', function($category){
	return App\Category::find($category);
});

//Injeccion de Dependencias de bodegas
Route::bind('winery', function($winery){
	return App\Winery::find($winery);
});

//Injeccion de Dependencias de varietales
Route::bind('varietal', function($varietal){
	return App\Varietal::find($varietal);
});

//Injeccion de Dependencias de usuarios 
Route::bind('user', function($user){
	return App\User::find($user);
});



Route::get('/', [
	'as'	=> 'home',
	'uses'	=> 'StoreController@index'
	]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('/', [
		'as'	=> 'home',
		'uses'	=> 'StoreController@index'
	]);

	Route::get('/home', 'HomeController@index');

	//Product Routes

	Route::get('products', [
		'as' 	=> 'products-index',
		'uses' 	=> 'ProductController@index'
		 ]);


	Route::get('product-detail/{id}', [
		'as' => 'product-detail',
		'uses' => 'ProductController@detail'
		]);

	Route::get('product/primer_tasting/{product}',[
		'as' => 'primer-tasting',
		'uses' => 'ProductController@viewPrimer'
		]);

	//Categories Routes

	Route::get('categories', [
	'as' 	=> 'categories-index',
	'uses' 	=> 'CategoryController@index'
	 ]);

	//Cart routes

	Route::get('cart/show', [
		'as' => 'cart-show',
		'uses' => 'CartController@show'
	]);

	Route::get('cart/add/{product}', [
		'as' => 'cart-add',
		'uses' => 'CartController@add'
	]);

	Route::get('cart/remove/{product}', [
		'as' => 'cart-remove',
		'uses' => 'CartController@remove'
	]);

	Route::get('cart/update/{product}/{quantity}', [
		'as' => 'cart-update',
		'uses' => 'CartController@update',
		function($quantity){

	}]);

	Route::get('cart/count', [
		'as' => 'cart-count',
		'uses' => 'HomeController@cartCount'
	]);

	Route::get('cart/total', [
		'as' => 'cart-total',
		'uses' => 'CartController@total'
	]);

	Route::get('cart/trash', [
		'as' => 'cart-trash',
		'uses' => 'CartController@trash'
	]);

	Route::get('checkout/byMercadoPago', [
		'as'	=> 'mercadoPago-checkout',
		'uses'	=> 'PayController@mercadoPagoCheckout'
	]);

	Route::get('order-detail', [
		'middleware' => 'auth',
		'as' => 'order-detail',
		'uses' => 'CartController@orderDetail'
	]);

	//Login Routes

	Route::get('login', [
		'as' => 'auth.login', 
		'uses' => 'Auth\AuthController@showLoginForm'
	]);

	Route::post('login', [
		'as' => 'auth.login', 
		'uses' => 'Auth\AuthController@login'
	]);

	Route::get('logout', [
		'as' => 'auth.logout', 
		'uses' => 'Auth\AuthController@logout'
	]);

// Registration Routes...
	Route::get('register', [
		'as' => 'auth.register', 
		'uses' => 'Auth\AuthController@showRegistrationForm'
	]);

	Route::post('register', [
		'as' => 'auth.register', 
		'uses' => 'Auth\AuthController@register'
	]);

// Password Reset Routes...
	Route::get('password/reset/{token?}', [
		'as' => 'auth.password.reset', 
		'uses' => 'Auth\PasswordController@showResetForm'
	]);

	Route::post('password/email', [
		'as' => 'auth.password.email', 
		'uses' => 'Auth\PasswordController@sendResetLinkEmail'
	]);

	Route::post('password/reset', [
		'as' => 'auth.password.reset', 
		'uses' => 'Auth\PasswordController@reset'
	]);

	//Return MercadoPago
	Route::get('checkout/approvedPayment', function(){
		return view('store.confirm');
	});

	Route::get('checkout/pendingPayment', function(){
		return view('store.pending');
	});

	Route::get('checkout/failurePayment', function(){
		return view('store.failure');
	});

	//Social Login Routes

	Route::get('/redirect', 'SocialAuthController@redirect');

	Route::get('/callback', 'SocialAuthController@callback');

	Route::get('admin/home', function() {
		return view('admin.home');
	});

	Route::resource('admin/category', 'Admin\CategoryController');
	
	Route::resource('admin/product', 'Admin\ProductController');

	Route::resource('admin/varietal', 'Admin\VarietalController');

	Route::resource('admin/winery', 'Admin\WineryController');

	Route::resource('admin/user', 'Admin\UserController');

	Route::get('admin/orders', [
		'as' => 'admin.order.index',
		'uses' => 'Admin\OrderController@index'
	]);

});


	//Admin Routes

	
