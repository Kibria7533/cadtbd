<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/email',"App\Http\Controllers\EmailController@SaveEmail");
Route::post('/subscriber',"App\Http\Controllers\EmailController@SaveSubscriber");
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
