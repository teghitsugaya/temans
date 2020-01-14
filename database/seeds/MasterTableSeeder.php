<?php

use Illuminate\Database\Seeder;
use App\Master;

class MasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Master::create([
            'nama' => 'Ya'
        ]);

        Master::create([
            'nama' => 'Tidak'
        ]);

        Master::create([
            'nama' => 'Laki-Laki'
        ]);
        
        Master::create([
            'nama' => 'Perempuan'
        ]);

        Master::create([
            'nama' => 'Suami'
        ]);
        
        Master::create([
            'nama' => 'Istri'
        ]);

        Master::create([
            'nama' => 'Anak'
        ]);

        Master::create([
            'nama' => 'Internal'
        ]);
        
        Master::create([
            'nama' => 'Eksternal'
        ]);
        
    }
}
