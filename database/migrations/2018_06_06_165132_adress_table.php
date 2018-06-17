<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adress', function(Blueprint $table){
            $table->increments('Adress_id');
            $table->string('Country', 100);
            $table->string('City', 50);
            $table->string('Street', 50);
            $table->string('House_number', 5);
            $table->string('Appartment_Number', 5)->nullable();
            $table->char('Post_Index', 6);
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
