<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
    public function without_parameters(){
        return "Hello Welcome to Controllers";
    }
}
