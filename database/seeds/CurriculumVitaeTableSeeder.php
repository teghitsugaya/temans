<?php

use App\CurriculumVitae;
use Illuminate\Database\Seeder;

class CurriculumVitaeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CurriculumVitae::create([
            'id_user' => '2',
            'biografi' => 'Saya seorang manager yang sudah berpengalaman bekerja di Kimia Farma selama 15 Tahun. Saya memiliki keunggulan dalam memimpin bawahan saya secara cepat, tegas, dan benar. Mimpi saya ingin membuat Kimia Farma menjadi perushaaan farmasi tingkat International',
            'gelar_akademik' => 'S2',
            'nik' => '10000023',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1993-03-13',
            'jenis_kelamin' => '3',
            'agama' => 'Islam',
            'jabatan_terakhir' => 'Manager IT Operasional',
            'alamat_rumah' => 'Pancoran, Jakarta Selatan',
            'handphone' => '08212221112',
            'email' => 'putrakaef@kimiafarma.co.id',
            'npwp' => '12312312313',
            'sosial_media' => 'IG: @putrakaef',
        ]);
    }
}
