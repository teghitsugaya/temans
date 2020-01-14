<?php

use Illuminate\Database\Seeder;
use App\PeminatanPosisiDirektur;

class PeminatanPosisiDirekturTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeminatanPosisiDirektur::create([
            'id_cv' => '1',
            'id_master_peminatan_posisi_direktur' => '1',
            'check' => '1',
        ]);

        PeminatanPosisiDirektur::create([
            'id_cv' => '1',
            'id_master_peminatan_posisi_direktur' => '4',
            'check' => '1',
        ]);

        PeminatanPosisiDirektur::create([
            'id_cv' => '1',
            'id_master_peminatan_posisi_direktur' => '9',
            'check' => '1',
        ]);

        PeminatanPosisiDirektur::create([
            'id_cv' => '1',
            'id_master_peminatan_posisi_direktur' => '18',
            'check' => '1',
        ]);
    }
}
