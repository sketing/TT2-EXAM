<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->mediumText('body', 1000);
            $table->decimal('price', 7, 2);
            //$table->unsignedInteger('product_type_id');
            //$table->foreign('product_type_id')->references('product_type_id')->on('product_types');
            $table->string('cover_image');
            $table->integer('amount_in_storage');
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
        Schema::dropIfExists('products');
    }
}
