<?php

use App\Http\Controllers\ProductController;
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

Route::delete('deleteProduct/{id}',[ProductController::class,'destroy']);

Route::get('all',[ProductController::class,'all']);

Route::get('oneProduct/{id}',[ProductController::class,'getOne']);


Route::post('store',[ProductController::class,'store']);


Route::post('updateProduct',[ProductController::class,'update']);