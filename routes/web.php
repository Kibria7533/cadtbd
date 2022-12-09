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
    $home_blogs=DB::select('select * from home_blogs');
    $home_messeges=DB::select('select * from home_messeges');
    $home_sliders=DB::select('select * from home_sliders');
    return view('frontend.home',compact(['home_blogs','home_messeges','home_sliders']));
});
Route::get('/home', function () {
    $home_blogs=DB::select('select * from home_blogs');
    $home_messeges=DB::select('select * from home_messeges');
    $home_sliders=DB::select('select * from home_sliders');
    return view('frontend.home',compact(['home_blogs','home_messeges','home_sliders']));
});
Route::get('/about', function () {
    $abouts=DB::select('select * from abouts');
    return view('frontend.about',compact(['abouts']));
});
Route::get('/program', function () {
    $programs=DB::select('select * from programs');
    return view('frontend.program',compact(['programs']));
});
Route::get('/event', function () {
    $events=DB::select('select * from events');
    $events_right=DB::select('select * from events_rights');
    return view('frontend.event',compact(['events','events_right']));
});
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/contact', function () {
    $contacts_and_footers=DB::select('select * from contacts_and_footers');
    return view('frontend.contact',compact(['contacts_and_footers']));
});
Route::get('/press', function () {
    $presses=DB::select('select * from presses');
    return view('frontend.press',compact(['presses']));
});
Route::get('/career', function () {
    $careers=DB::select('select * from careers');
    return view('frontend.career',compact(['careers']));
});

Route::get('/donate', function () {

    return view('frontend.donate');
});

Route::get('/research', function () {

    $researches =DB::select('select * from research');
    return view('frontend.research',compact(['researches']));
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
