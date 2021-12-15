<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\secondcontroller;
use App\Http\Controllers\fetchdata;
use App\Http\Controllers\Task;
use App\Models\Post;  
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
Route::get('/', [PostsController::class, 'index'])->middleware('check');
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
Route::get('students',[fetchdata::class,'fetch_data']);
Route::get("/insert",function(){
     $insert=DB::insert('insert into students(Name,Redgno,Stream) values(?,?,?)',['KasiKasi','18K61A05H3','CSE']);
     if($insert==1){
         return "Data Inserted Successfully !!";
     }
     else{
         return "Data Failed to Insert";
     }

});
Route::get("/update",function(){
 $update=DB::update("update students set Name=? where Redgno=?",['Poorna','18K61A05H3']);
 if($update==1){
     return "Data Updated Successfully !!";
 }
 else{
     return "Data Failed to Update";
 }
});
Route::get("/delete",function(){
     $delete=DB::delete("delete from students where Redgno=?",['18K61A05D7']);
     if($delete==1){
         return "Data Deleted Successfully !!";
     }
     else{
         return "Data Failed to Delete";
     }
});
Route::get('/reads',function(){
 /*$students=Post::all();
 foreach($students as $student){
     echo $student->name."</br>";
 }*/
 return view("read");
});
Route::get('/find',function(){
    $students=Post::find(2);
    echo $students->Name."</br>";
});
Route::get('/constraint',function(){
    $students=Post::where('Id',2)->first();
    echo $students;
});
Route::get('/value',function(){
    $students=Post::where('Id',2)->value('Name');
    echo $students;
});
Route::get('/insert1',function(){
 $posts=new Post;
 $posts->Name='Godesh';
 $posts->Redgno='18K61A05G7';
 $posts->Stream='ECE';
 $posts->save();
});
Route::get('/update1',function(){
    $posts=Post::find(7);
    $posts->Name='Basha';
    $posts->Redgno='18K61A05G7';
    $posts->Stream='ECE';
    $posts->save();
});
Route::get('/create',function(){  
    Post::create(['Name'=>'Harshita','Redgno'=>'18K61A05F4','Stream'=>'IT']);  
});
Route::get('/update2',function(){  
    Post::where('Id',8)->update(['Name'=>'Charu']);  
});
Route::get('/delete2',function(){  
    $post=Post::where("Id",8);
    $post->delete();  
}); 
Route::get('/truncate',function(){  
    Post::truncate();
});
Route::get('/form',function(){
  return view("task");
});
Route::get('task', [Task::class, 'index']);
Route::post('store-form', [Task::class, 'store']);