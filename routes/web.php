<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () { return view('demo'); });
Route::get('/item/zapatilla-blanca-adidas-mujer', function () { return view('item'); });
Route::get('/categoria/mujer', function () { return view('category'); });
Route::get('/destacados', function () { return view('featured'); });
Route::get('/carrito', function () { return view('cart'); });
Route::get('/contacto', function () { return view('contact'); });
Route::get('/nosotros', function () { return view('about'); });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');