<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_paids', function (Blueprint $table) {
            $table->id();
            $table->dateTime('paidDate');
            $table->string('stuID',20);
            $table->string('term');
            $table->string('acadYear');
            $table->string('subjID');
            $table->float('amount');
            $table->float('paidAmount');
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
        Schema::dropIfExists('student_paids');
    }
}
