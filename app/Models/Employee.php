<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone'];
    public function salary()
    {
       return $this->hasOne('App\Models\Salary');
    }
    public function salar()
    {
       return $this->hasMany('App\Models\Salary');
    }

}
