<?php

use Illuminate\Database\Seeder;
use App\Penghargaan;

class PenghargaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penghargaan::create([
            'id_cv' => '1',
            'jenis_penghargaan' => 'Best Manager 2018',
            'tingkat' => 'Nasional',
            'diberikan_oleh' => 'PT. Kompas Media',
            'tahun' => '2018',    
        ]);

        Penghargaan::create([
            'id_cv' => '1',
            'jenis_penghargaan' => 'Best implementing IOT in manufacture',
            'tingkat' => 'Internasional',
            'diberikan_oleh' => 'Kementrian Teknologi Informasi',
            'tahun' => '2019',    
        ]);

        Penghargaan::create([
            'id_cv' => '1',
            'jenis_penghargaan' => 'Best Performance',
            'tingkat' => 'Nasional',
            'diberikan_oleh' => 'PT Maju Jaya',
            'tahun' => '2019',    
        ]);
    
    }
}
