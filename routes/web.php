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

/*
Route::view('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::view(uri: '/', view: 'index')->name(name:'home');
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view(uri: '/about', view: 'about')->name(name:'about');
Route::view(uri: '/contact', view: 'contact')->name(name:'contact');


