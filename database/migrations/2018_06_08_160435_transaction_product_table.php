<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransactionProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transaction_Product', function(Blueprint $table){
            $table->unsignedInteger('Transaction_id');
            $table->foreign('Transaction_id')->references('Transaction_id')->on('Transaction_History');
            $table->unsignedInteger('Product_id');
            $table->foreign('Product_id')->references('Product_id')->on('Product');
            $table->decimal('Price_sold_for', 7, 2);
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
