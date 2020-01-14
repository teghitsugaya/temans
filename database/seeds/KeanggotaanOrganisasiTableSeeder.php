<?php

use Illuminate\Database\Seeder;
use App\KeanggotaanOrganisasi;

class KeanggotaanOrganisasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KeanggotaanOrganisasi::create([
            'id_cv' => '1',
            'nama_kegiatan' => 'Serikat Pekerja',
            'jabatan' => 'Ketua',
            'rentang_waktu' => '2017-2019',
            'uraian_singkat' => 'Organisasi internal tentang karyawan di KF',
            'profesi' => 'Memimpin organisasi berjalan lancar',
            'non_formal' => 'Tidak',
            
        ]);

        KeanggotaanOrganisasi::create([
            'id_cv' => '1',
            'nama_kegiatan' => 'Partai',
            'jabatan' => 'Ketua',
            'rentang_waktu' => '2018-2019',
            'uraian_singkat' => 'Organisasi partai di indonesia',
            'profesi' => 'Memimpin organisasi berjalan lancar',
            'non_formal' => 'Tidak',
            
        ]);

        KeanggotaanOrganisasi::create([
            'id_cv' => '1',
            'nama_kegiatan' => 'NeoTelemetri',
            'jabatan' => 'Ketua',
            'rentang_waktu' => '2017-2018',
            'uraian_singkat' => 'Organisasi eksternal bidang teknologi informasi',
            'profesi' => 'Memimpin organisasi berjalan lancar',
            'non_formal' => 'Ya',
            
        ]);

        KeanggotaanOrganisasi::create([
            'id_cv' => '1',
            'nama_kegiatan' => 'Serikat Islam',
            'jabatan' => 'Ketua',
            'rentang_waktu' => '2017-2018',
            'uraian_singkat' => 'Organisasi eksternal bidang Keagamaan',
            'profesi' => 'Memimpin organisasi berjalan lancar',
            'non_formal' => 'Ya',
            
        ]);
    }
}
