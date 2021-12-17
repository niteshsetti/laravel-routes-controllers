<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('languages');
            $table->string('gender');
            $table->string('phone');
            $table->string('description');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('image');
            $table->timestamps();
            $table->integer('user_id')->unsigned();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
