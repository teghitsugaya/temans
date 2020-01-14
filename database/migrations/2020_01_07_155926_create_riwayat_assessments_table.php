<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_assessments', function (Blueprint $table) {
            $table->bigIncrements('id_riwayat_assessment');
            $table->string('npp')->nullable();
            $table->string('kode_pelatihan')->nullable();
            $table->string('status_image')->nullable();
            $table->string('status_resume')->nullable();
            $table->string('file_image')->nullable();
            $table->string('file_resume')->nullable();
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
        Schema::dropIfExists('riwayat_assessments');
    }
}
