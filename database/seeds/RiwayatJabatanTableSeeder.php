<?php

use Illuminate\Database\Seeder;
use App\RiwayatJabatan;

class RiwayatJabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RiwayatJabatan::create([
            'id_cv' => '1',
            'jabatan' => 'Asman IT',
            'instansi' => 'Kimia farma Apotek',
            'awal_menjabat' => '2015',
            'akhir_menjabat' => '2017',
            'tupoksi' => 'Mengatur berjalannya Operasional dibidang IT di KFA',
            'achievement' => 'Best asman KFA',
            'penugasan_komisaris' => 'Tidak',
        ]);

        RiwayatJabatan::create([
            'id_cv' => '1',
            'jabatan' => 'Manager IT Pengembangan',
            'instansi' => 'Kimia farma Holding',
            'awal_menjabat' => '2017',
            'akhir_menjabat' => '2018',
            'tupoksi' => 'Merancang aplikasi untuk kimiafarma',
            'achievement' => 'Innovation award 2018',
            'penugasan_komisaris' => 'Tidak',
        ]);

        RiwayatJabatan::create([
            'id_cv' => '1',
            'jabatan' => 'Manager IT Operasi',
            'instansi' => 'Kimia farma Holding',
            'awal_menjabat' => '2018',
            'akhir_menjabat' => '2019',
            'tupoksi' => 'Mengatur berjalannya Operasional dibidang IT dengan lancar',
            'achievement' => 'Juara 1 Best Manager',
            'penugasan_komisaris' => 'Ya',
        ]);
    }
}
