<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function(Blueprint $table){
            $table->increments('User_id');
            $table->string('Username',30)->unique();
            $table->string('Name', 30);
            $table->string('Surname', 30);
            $table->date('DoB');
            $table->unsignedInteger('Adress_id');      
            $table->foreign('Adress_id')->references('Adress_id')->on('Adress');
            $table->unsignedInteger('Credit_card_id');
            $table->foreign('Credit_card_id')->references('Credit_card_id')->on('Credit_Card');
            $table->unsignedInteger('Paypal_id');
            $table->foreign('Paypal_id')->references('Paypal_id')->on('PayPal');
            $table->boolean('News_Letter_Checkbox');
            $table->string('Role', 30);
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
