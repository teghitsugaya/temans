<?php

use Illuminate\Database\Seeder;
use App\PengalamanNarasumber;

class PengalamanNarasumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengalamanNarasumber::create([
            'id_cv' => '1',
            'acara' => 'Information teknologi Fair',
            'penyelenggara' => 'Kominfo',
            'tahun' => '2018',
            'lokasi' => 'Jakarta',
            
        ]);

        PengalamanNarasumber::create([
            'id_cv' => '1',
            'acara' => 'IOT internasional event',
            'penyelenggara' => 'Telkom',
            'tahun' => '2019',
            'lokasi' => 'Jakarta',
            
        ]);

        PengalamanNarasumber::create([
            'id_cv' => '1',
            'acara' => 'Management Trainee',
            'penyelenggara' => 'Kimia Farma',
            'tahun' => '2018',
            'lokasi' => 'Jakarta',
            
        ]);
    }
}
