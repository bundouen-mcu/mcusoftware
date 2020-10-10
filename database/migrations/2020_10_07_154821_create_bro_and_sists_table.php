<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBroAndSistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bro_and_sists', function (Blueprint $table) {
            $table->id();
            $table->string('stuID',20);
            $table->string('Name',50);
            $table->string('sex',10);
            $table->boolean('death');
            $table->boolean('marry');
            $table->string('knowledge');
            $table->string('job');
            $table->text('workPlace');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
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
        Schema::dropIfExists('bro_and_sists');
    }
}
