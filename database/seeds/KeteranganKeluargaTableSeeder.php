<?php

use Illuminate\Database\Seeder;
use App\KeteranganKeluarga;

class KeteranganKeluargaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KeteranganKeluarga::create([
            'id_cv' => '1',
            'nama' => 'Aisyah',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1993-03-13',
            'tanggal_menikah' => '2019-03-12',
            'pekerjaan' => 'PNS',
            'keterangan' => 'Test keterangan',
            'jenis_kelamin' => 'Perempuan',
            'status_keluarga' => 'Istri',
        ]);

        KeteranganKeluarga::create([
            'id_cv' => '1',
            'nama' => 'Ahmad',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1993-03-13',
            'tanggal_menikah' => '2019-03-13',
            'pekerjaan' => 'Pelajar',
            'keterangan' => 'Test keterangan',
            'jenis_kelamin' => 'Laki-Laki',
            'status_keluarga' => 'Anak',
        ]);

        KeteranganKeluarga::create([
            'id_cv' => '1',
            'nama' => 'Umar',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1993-03-13',
            'tanggal_menikah' => '2019-03-13',
            'pekerjaan' => 'Pelajar',
            'keterangan' => 'Test keterangan',
            'jenis_kelamin' => 'Laki-Laki',
            'status_keluarga' => 'Anak',
        ]);

        
    }
}
