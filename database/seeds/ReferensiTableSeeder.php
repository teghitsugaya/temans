<?php

use Illuminate\Database\Seeder;
use App\Referensi;

class ReferensiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Referensi::create([
            'id_cv' => '1',
            'nama' => 'Asep',
            'perusahaan' => 'Kimia Farma',
            'jabatan' => 'Direksi Keuangan KF',
            'no_hp' => '08123112323',
        ]);

        Referensi::create([
            'id_cv' => '1',
            'nama' => 'Fitra',
            'perusahaan' => 'Kimia Farma',
            'jabatan' => 'Direksi Design KF',
            'no_hp' => '08123121133',
        ]);
    }
}
