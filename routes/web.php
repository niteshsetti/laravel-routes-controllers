<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\secondcontroller;
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
//Route::get('/', [PostsController::class, 'index'])->middleware('check');
Route::get('/',function(){
   return view("welcome");
});
Route::get('/first',[firstcontroller::class,'without_parameters']);
Route::get('/second/{name}',[secondcontroller::class,'with_parameters']);
Route::get('/second/{name}',function($name){
    return view("second",["name"=>$name]);
});
Route::get('/default/{default?}',function($default="Ram"){
    return view("default",["default"=>$default]);
});
Route::get('/come/{id}', [PostsController::class, 'setId']);