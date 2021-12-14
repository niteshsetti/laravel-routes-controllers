<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secondcontroller extends Controller
{
    public function with_parameters($name){
        return "Your name is :".$name;
    }
}
