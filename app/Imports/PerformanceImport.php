<?php

namespace App\Imports;

use App\Performance;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PerformanceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] != "" && $row[1] !="Nama"){
            return new Performance([
                'npp'     => $row[0],
                'nama'    => $row[1],
                'tahun_kinerja'    => $row[2],
                'jabatan'    => $row[3],
                'nilai_kinerja'    => $row[4],
                'kategori'    => $row[5],
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
