<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InBasketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('In_Basket', function(Blueprint $table){
            $table->unsignedInteger('Basket_id');
            $table->foreign('Basket_id')->references('Basket_id')->on('Shopping_Basket');
            $table->unsignedInteger('Product_id');
            $table->foreign('Product_id')->references('Product_id')->on('Product');
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
