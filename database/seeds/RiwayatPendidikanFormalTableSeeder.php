<?php

use Illuminate\Database\Seeder;
use App\RiwayatPendidikanFormal;

class RiwayatPendidikanFormalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RiwayatPendidikanFormal::create([
            'id_cv' => '1',
            'jenjang' => 'S1 Teknik Informatika',
            'jurusan' => 'Teknik Informatika',
            'tahun_lulus' => '2017',
            'perguruan_tinggi' => 'Institut Teknologi Bandung',
            'kota' => 'Bandung',
            'penghargaan' => 'Best student 2017',
        ]);

        RiwayatPendidikanFormal::create([
            'id_cv' => '1',
            'jenjang' => 'S2 Teknik Informatika',
            'jurusan' => 'Teknik Informatika',
            'tahun_lulus' => '2019',
            'perguruan_tinggi' => 'Institut Teknologi Bandung',
            'kota' => 'Bandung',
            'penghargaan' => 'Best student 2019',
        ]);
    }
}
