<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('stuID',20)->primary();
            $table->string('idCard');
            $table->string('khmName',50);
            $table->string('ltin',50);
            $table->string('sex',10);
            $table->date('dob');
            $table->string('nation');
            $table->string('nationality');
            $table->string('famStatus');
            $table->string('job');
            $table->text('pob');
            $table->text('curAddr');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('pic');
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
        Schema::dropIfExists('students');
    }
}
