<?php

namespace App\Imports;

use App\Assessment;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;


class AssessmentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] != "" && $row[1] !="Nama"){
            return new Assessment([
                'npp'     => $row[0],
                'nama'    => $row[1],
                'jabatan'    => $row[2],
                'hasil'    => $row[3],
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
