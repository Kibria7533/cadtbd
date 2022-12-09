<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/program', function () {
    return view('frontend.program');
});
Route::get('/event', function () {
    return view('frontend.event');
});
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/press', function () {
    return view('frontend.press');
});
Route::get('/career', function () {
    return view('frontend.career');
});

Route::get('/donate', function () {
    return view('frontend.donate');
});

Route::get('/research', function () {
    return view('frontend.research');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
