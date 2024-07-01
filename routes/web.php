<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WooUsrMiloController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\WooTiendaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
	return view('auth.login');
});


Auth::routes();

Route::resource('states', StateController::class);

Route::resource('users', UserController::class);


Route::get('/error_configs', function () {
	return view('error_configs');
});

Route::get('/configshow/{id}',              'App\Http\Controllers\ConfigController@show');
Route::get('/configedit/{id}',              'App\Http\Controllers\ConfigController@edit');
Route::get('/configindex',              	'App\Http\Controllers\ConfigController@index');
Route::patch('configupdate/{id}', 			'App\Http\Controllers\ConfigController@update');
Route::resource('configs', ConfigController::class);

#Route::resource('woo_tiendas', WooTiendaController::class);

Route::prefix('woo-tiendas')->namespace('App\Http\Controllers')->name('woo-tiendas')->middleware('auth')->group(static function () {
	Route::get('/', 'WooTiendaController@index')->name('index');
	Route::get('create/', 'WooTiendaController@create')->name('create');
	Route::delete('destroy/{id}', 'WooTiendaController@destroy')->name('destroy');
	Route::get('/show/{id}', 'WooTiendaController@show')->name('show');
	Route::get('/edit/{id}', 'WooTiendaController@edit')->name('edit');
	Route::patch('update/{id}', 'WooTiendaController@update')->name('update');
});

#Route::resource('woo-tiendas', WooTiendaController::class);
Route::post('/woo-tiendas-store',              'App\Http\Controllers\WooTiendaController@store');

Route::prefix('woo-usr-milos')->namespace('App\Http\Controllers')->name('woo-usr-milos/')->middleware('auth')->group(static function () {
	Route::get('/index1/{id_tienda}', 'WooUsrMiloController@index1')->name('index1');
});
Route::resource('woo-usr-milos', WooUsrMiloController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('webhooks')->namespace('App\Http\Controllers')->name('webhooks/')->middleware('auth')->group(static function() {
	Route::get('/{id}', 'WebhooksController@index')->name('index');
});

Route::prefix('carriers')->namespace('App\Http\Controllers')->name('carriers/')->middleware('auth')->group(static function() {
	Route::get('/{id}', 'CarriersController@index')->name('index');
});

Route::prefix('woo_order')->namespace('App\Http\Controllers')->name('woo_order/')->middleware('auth')->group(static function () {
	Route::get('/', 'WooOrderController@index')->name('index');
});

Route::prefix('orders_detail')->namespace('App\Http\Controllers')->name('orders_detail/')->middleware('auth')->group(static function() {
	Route::get('/{id}',                                             'OrdersDetailController@index')->name('index');
});


