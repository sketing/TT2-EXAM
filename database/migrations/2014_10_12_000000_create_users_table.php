<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            /*$table->string('surname');
            $table->date('dob');
            $table->unsignedInteger('adress_id');      
            $table->foreign('adress_id')->references('adress_id')->on('adresses');
            $table->unsignedInteger('credit_card_id');
            $table->foreign('credit_card_id')->references('credit_card_id')->on('credit_cards');
            $table->unsignedInteger('paypal_id');
            $table->foreign('paypal_id')->references('paypal_id')->on('paypals');
            $table->boolean('news_letter_checkbox');
            $table->string('role')->default('customer');
            $table->rememberToken();*/
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
        Schema::dropIfExists('users');
    }
}
