<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->unsignedInteger('keyword_id');
            $table->foreign('keyword_id')->references('keyword_id')->on('keywords');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->timestamps()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relations');
    }
}
