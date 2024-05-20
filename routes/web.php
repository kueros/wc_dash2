<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;
use App\Http\Controllers\User2Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::resource('states', StateController::class);

Route::resource('user2s', User2Controller::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('stores')->namespace('App\Http\Controllers')->name('stores/')->middleware('auth')->group(function() {
    Route::get('/', 'StoresController@index')->name('index');
});


Route::prefix('webhooks')->namespace('App\Http\Controllers')->name('webhooks/')->middleware('auth')->group(static function() {
	Route::get('/{id}',                                             'WebhooksController@index')->name('index');
});

Route::prefix('carriers')->namespace('App\Http\Controllers')->name('carriers/')->middleware('auth')->group(static function() {
	Route::get('/{id}',                                             'CarriersController@index')->name('index');
});

Route::prefix('iflow_orders_data')->namespace('App\Http\Controllers')->name('iflow_orders_data/')->middleware('auth')->group(static function() {
	Route::get('/',                                             'IflowOrdersDataController@index')->name('index');
});

Route::prefix('orders_detail')->namespace('App\Http\Controllers')->name('orders_detail/')->middleware('auth')->group(static function() {
	Route::get('/{id}',                                             'OrdersDetailController@index')->name('index');
});


