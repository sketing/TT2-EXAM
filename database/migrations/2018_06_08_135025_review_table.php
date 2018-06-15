<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Review', function(Blueprint $table){
            $table->increments('Review_id');
            $table->tinyInteger('Rating');
            $table->string('Comment', 500);
            $table->unsignedInteger('User_id');
            $table->foreign('User_id')->references('User_id')->on('User');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
