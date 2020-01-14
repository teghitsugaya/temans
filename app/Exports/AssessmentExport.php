<?php

namespace App\Exports;

use App\Assessment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;

class AssessmentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if(Auth::user()->hasRole('Admin')){
            $data = Assessment::select('npp','nama','jabatan','hasil')->get();
        }else{
            $data = DB::table('assessment')
                        ->select('npp','nama','jabatan','hasil')
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
            'Jabatan',
            'Hasil',
        ];
    }
}
