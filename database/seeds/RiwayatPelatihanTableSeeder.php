<?php

use Illuminate\Database\Seeder;
use App\RiwayatPelatihan;

class RiwayatPelatihanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RiwayatPelatihan::create([
            'id_cv' => '1',
            'nama_pelatihan' => 'Master Leadership',
            'penyelenggara' => 'Kimia Farma Coorporate University',
            'tahun_diklat' => '2017',
            'nomor_sertifikasi' => 'KF 2123113',
            'tingkat' => 'Karyawan',
            'jenis_diklat' => 'Internal',
        ]);

        RiwayatPelatihan::create([
            'id_cv' => '1',
            'nama_pelatihan' => 'Master Bisnis',
            'penyelenggara' => 'Kementrian Perdagangan',
            'tahun_diklat' => '2018',
            'nomor_sertifikasi' => 'KF 1111111',
            'tingkat' => 'Karyawan',
            'jenis_diklat' => 'Eksternal',
        ]);

        RiwayatPelatihan::create([
            'id_cv' => '1',
            'nama_pelatihan' => 'SAP for intermediate',
            'penyelenggara' => 'Telkom',
            'tahun_diklat' => '2019',
            'nomor_sertifikasi' => 'KF 454545',
            'tingkat' => 'Umum',
            'jenis_diklat' => 'Eksternal',
        ]);
    }
}
