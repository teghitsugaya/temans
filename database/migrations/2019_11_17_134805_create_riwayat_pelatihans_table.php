<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pelatihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_cv')->nullable();
            $table->string('nama_pelatihan')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->string('tahun_diklat')->nullable();
            $table->string('nomor_sertifikasi')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('jenis_diklat')->nullable();
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
        Schema::dropIfExists('riwayat_pelatihans');
    }
}
