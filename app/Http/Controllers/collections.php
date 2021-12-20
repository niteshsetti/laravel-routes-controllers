<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collections extends Controller
{
    public function collections(){
        $collections=collect([1,2,3,4,5,1,2,3]);
        echo $collections."</br>";
        $sum=$collections->sum();
        echo $sum."</br>";
        $avg=$collections->avg();
        echo $avg."</br>";
        $chunk=$collections->chunk(2);
        echo $chunk."</br>";
        $collection_new=collect(["name","redgno"]);
        $a=$collection_new->combine(["Nitesh","18K61A05D7"]);
        echo $a."</br>";
        $con=collect(["Nitesh"]);
        $b=$con->concat(["Setti"]);
        echo $b."</br>";
        $c=$collections->contains(2);
        echo $c."</br>";
        $d=$collections->containsStrict(2);
        echo $d."</br>";
        echo $collections->count()."</br>";
        echo $collections->countBy()."</br>";
        $cross=$collections->crossJoin(["a,b"]);
        echo $cross."</br>";
        echo $collections->diff([1,2,10,11,12])."</br>";
        echo $collections->duplicates();
        $collections->each(function($key,$value){
             echo $key."</br>";
        });
        $collect = collect([['John Doe', 35,"18K61A05D7"], ['Jane Doe', 33,'18K61A05D8']]);
        $collect->eachSpread(function ($name, $age,$redgno) {
            echo $name." ".$age." ".$redgno."</br>";
        });
        echo $collections->filter(function($value){
            return $value>2;
        })."</br>";
        $coll = collect(['name' => 'taylor', 'framework' => 'laravel']);
        $flipped = $coll->flip();
        echo $flipped."</br>";
        echo $coll->forget('name')."</br>";
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        echo $collection->forPage(2, 3)."</br>";
        echo $coll->get('framework')."</br>";
        $co = collect([
            ['account_id' => 1, 'product' => 'Desk'],
            ['account_id' => 2, 'product' => 'Chair'],
        ]);
        echo $co->implode('product', ', ')."</br>";
        echo $collections->isNotEmpty()."</br>";
        $multiplied = $collection->map(function ($item) {
            return $item * 2;
        });
        echo $multiplied."</br>";
        echo $collection->max()."</br>";
        echo $collection->median()."</br>";



    }
}
