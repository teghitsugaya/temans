<?php

use Illuminate\Database\Seeder;
use App\KategoriInterest;

class KategoriInterestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriInterest::create([
            'nama' => 'Managerial'
        ]);
        KategoriInterest::create([
            'nama' => 'Information Technology'
        ]);
        KategoriInterest::create([
            'nama' => 'Keuangan'
        ]);
        KategoriInterest::create([
            'nama' => 'Bisnis'
        ]);
        KategoriInterest::create([
            'nama' => 'Manufactur'
        ]);
        KategoriInterest::create([
            'nama' => 'Supply Chain'
        ]);
        KategoriInterest::create([
            'nama' => 'Marketing'
        ]);
        
    }
}
