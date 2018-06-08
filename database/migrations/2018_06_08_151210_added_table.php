<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Added', function(Blueprint $table){
            $table->increments('Added_type_id');
            $table->unsignedInteger('Product_id');
            $table->foreign('Product_id')->references('Product_id')->on('Product');
            $table->unsignedInteger('User_id');
            $table->foreign('User_id')->references('User_id')->on('User');
            $table->datetime('Added_date');
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
