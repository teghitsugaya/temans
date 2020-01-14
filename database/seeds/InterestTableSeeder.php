<?php

use Illuminate\Database\Seeder;
use App\Interest;

class InterestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interest::create([
            'id_cv' => '1',
            'deskripsi' => 'Managerial skill',
            'id_kategori_interest' => '1',
        ]);

        Interest::create([
            'id_cv' => '1',
            'deskripsi' => '',
            'id_kategori_interest' => '2',
        ]);

        Interest::create([
            'id_cv' => '1',
            'deskripsi' => '',
            'id_kategori_interest' => '4',
        ]);
    }
}
