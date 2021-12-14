<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return "Welcome to Controllers";
    }
    public function display(){
        return "Welcome to another Controller";
    }
    public function setId($id){
        return "This is my another".$id;
    }
}
