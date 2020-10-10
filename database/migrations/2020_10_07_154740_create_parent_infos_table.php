<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_infos', function (Blueprint $table) {
            $table->id();
            $table->string('stuID',20);
            $table->string('parentName',50);
            $table->string('ltin',50);
            $table->string('sex',10);
            $table->boolean('death');
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
        Schema::dropIfExists('parent_infos');
    }
}
