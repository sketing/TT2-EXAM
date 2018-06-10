<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function(Blueprint $table){
            $table->increments('Product_id');
            $table->string('Name', 100);
            $table->string('Description', 500);
            $table->decimal('Price', 7, 2);
            $table->unsignedInteger('Product_type_id');
            $table->foreign('Product_type_id')->references('Product_type_id')->on('Product_Type');
            $table->unsignedInteger('Image_id');
            $table->foreign('Image_id')->references('Image_id')->on('Image');
            $table->integer('Amount_in_storage');
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
