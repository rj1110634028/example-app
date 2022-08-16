<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
 

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

Route::get('/test/{name}/with/{msg}', function (Request $request, $n, $m) {
    return response()->json(["msg" => "Hi ".$n.", ". $m], 200);
});

Route::resource('test', TestController::class);
Route::resource('store', StoreController::class);
Route::resource('product', ProductController::class);