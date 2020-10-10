<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHigthSchoolInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('higth_school_infos', function (Blueprint $table) {
            $table->string('stuID',20)->primary();
            $table->string('certID');
            $table->string('grade',50);
            $table->string('hschool',50);
            $table->string('province',50);
            $table->date('subjID',20);
            $table->string('description');
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
        Schema::dropIfExists('higth_school_infos');
    }
}
