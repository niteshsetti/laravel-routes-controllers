<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fetchdata extends Controller
{
     public function fetch_data(){
         return DB::select('select *from countrie');
     }
}
