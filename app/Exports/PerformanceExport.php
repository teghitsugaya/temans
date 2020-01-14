<?php

namespace App\Exports;

use App\Performance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;

class PerformanceExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if(Auth::user()->hasRole('Admin')){
            $data = Performance::select('npp','nama','tahun_kinerja','jabatan','nilai_kinerja','kategori')->get();
        }else{
            $data = DB::table('performances')
                        ->select('npp','nama','tahun_kinerja','jabatan','nilai_kinerja','kategori')
                        ->where('npp', Auth::user()->npp)
                        ->get();
        }
        return $data;
    }

    public function headings(): array
    {
        return [
            'NPP',
            'Nama',
            'Tahun Kinerja',
            'Jabatan',
            'Nilai Kinerja',
            'Kategori',
        ];
    }
}
