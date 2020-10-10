<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->string('stuID',20)->primary();
            $table->string('degree');
            $table->string('subjID',20);
            $table->string('acadYear');
            $table->string('studying');
            $table->string('stage');
            $table->string('term');
            $table->string('promotion');
            $table->text('studyTime');
            $table->text('schoolarship');
            $table->string('stuFee');
            $table->integer('discount');
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
        Schema::dropIfExists('faculties');
    }
}
