<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='countries';
    protected $fillable=
    [
    'name',
    'email',
    'languages',
    'gender',
    'phone',
    'description',
    'country',
    'state',
    'city',
    'image'
    ];

}
