<?php

use App\Http\Controllers\Api\OrderController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


 Route::apiResource('orders',OrderController::class)->middleware(['log.route','throttle:30,1']);

 Route::middleware(['log.route'])->group(function () {
   Route::apiResource('orders',OrderController::class)->middleware('throttle:30,1');
   //after 30 request handling to session to with redis
   //JUST DEFINE SESSION_DRIVER=redis IN YOUR ENV FILE
});
