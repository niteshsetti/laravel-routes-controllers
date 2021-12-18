<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fetchdata;
use App\Http\Controllers\Task;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/details',[fetchdata::class,'fetch_data']);
Route::post('/form', [Task::class, 'store']);
Route::post('update/{id}',[Task::class,'store1']);
Route::post('delete/{id}',[Task::class,'store2']);


