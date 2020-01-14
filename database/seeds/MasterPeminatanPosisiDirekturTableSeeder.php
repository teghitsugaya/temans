<?php

use Illuminate\Database\Seeder;
use App\MasterPeminatanPosisiDirektur;

class MasterPeminatanPosisiDirekturTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Direktur Utama',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Keuangan',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Commercial Banking',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Digital Banking',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Treasury',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Pemasaran',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Pengembangan Bisnis',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Produksi',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Teknik',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Risiko Perusahaan',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Human Capital (SDM)',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Investasi',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Procurement/Pengadaan',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Keamanan dan keselamatan Kerja',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Logistik',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Strategic Portfolio',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Supply Chain Management',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Teknologi Informasi',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Operasional',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Manajemen Aset',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Pelayanan/Services',
        ]);
        MasterPeminatanPosisiDirektur::create([
            'peminatan' => 'Kepatuhan/Hukum/Legal',
        ]);
    }
}
