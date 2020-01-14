<?php

use Illuminate\Database\Seeder;
use App\KaryaTulis;

class KaryaTulisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KaryaTulis::create([
            'id_cv' => '1',
            'judul' => 'Perancangan monitoring kendaraan kantor dengan teknologi IOT',
            'tahun' => '2018',
            
        ]);

        KaryaTulis::create([
            'id_cv' => '1',
            'judul' => 'Analisis manfaat IOT untuk manufacture',
            'tahun' => '2018',
            
        ]);
    }
}
