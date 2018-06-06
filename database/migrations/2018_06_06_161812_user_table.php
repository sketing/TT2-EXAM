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
    public function up() //W.I.P.
    {
        Schema::create('User', function(Blueprint $table){
            $table->string('Username',30)->primary();
            $table->string('Name', 30);
            $table->string('Surname', 30);
            $table->date('DoB');
            $table->boolean('News Letter Checkbox');
            $table->string('Role', 30);
        })
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
