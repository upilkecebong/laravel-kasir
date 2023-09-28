<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
$controller_path = 'App\Http\Controllers';

Route::get('/', function () {
    return view('welcome');
});


Route::resource('product',ProductController::class);

Route::get('/kasir', $controller_path . '\CustomerController@index');
Route::get('/kasir/create', $controller_path . '\CustomerController@create')->name('customer.create');
Route::post('/kasir/customer-store', $controller_path . '\CustomerController@store')->name('customer.store');

