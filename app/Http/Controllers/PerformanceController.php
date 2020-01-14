<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Imports\PerformanceImport;
use App\Exports\PerformanceExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Performance;
use App\User;
use App\Role;
use Session;
use DB;

class PerformanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
        if(Auth::user()->hasRole('Admin')){
            $data = Performance::all();
        }else{
            $data = DB::table('performances')->where('npp', Auth::user()->npp)->get();
        }
		
		return view('performance.show',['data' => $data]);
	}

    public function import(Request $request)
    {
        $this->validate($request, [
        'file' => 'required|mimes:csv,xls,xlsx'
            ]);

    	if ($request->hasFile('file')) {
            $file = $request->file('file');

            Excel::import(new PerformanceImport, $file);
            Session::flash('success','Data berhasil di import.');

            return redirect('/performance');
        }        
    }

    public function export()
    {
    	return Excel::download(new PerformanceExport, 'Performance.xlsx');      
    }

}
