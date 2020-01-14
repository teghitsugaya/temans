<?php

use Illuminate\Database\Seeder;
use App\Summary;

class SummaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Summary::create([
            'id_cv' => '1',
            'keahlian' => 'Managerial skill, programing',
            'value' => 'Agama, Integrity, Kerja Keras',
            'visi' => 'Selalu ingin menjadi pribadi yang lebih baik kedepannya',
        ]);
    }
}
