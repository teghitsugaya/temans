<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminatanPosisiDirektursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminatan_posisi_direkturs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_cv')->nullable();
            $table->string('id_master_peminatan_posisi_direktur')->nullable();
            $table->string('check')->nullable();
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
        Schema::dropIfExists('peminatan_posisi_direkturs');
    }
}
