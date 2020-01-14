<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Imports\AssessmentImport;
use App\Exports\AssessmentExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Assessment;
use App\RiwayatAssessment;
use App\JenisAssessment;
use App\User;
use App\Role;
use Session;
use Response;
use DB;

class AssessmentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('Admin')){
            $data = Assessment::select('npp', 'nama')
                    ->distinct()
                    ->get();

            return view('assessment.index',['data' => $data]);
        }
        
        return redirect('assessment/detail/'.Auth::user()->npp);
    }

    public function detail($npp)
    {
        // dd($npp);
        $data = Assessment::select('*')
                ->where('npp', $npp)
                ->get();

        $ass  = RiwayatAssessment::where('npp', $npp)
                ->leftJoin('jenis_assessments', 'jenis_assessments.kode_pelatihan', '=', 'riwayat_assessments.kode_pelatihan')
                ->select('*')
                ->get();
        $jenisass = JenisAssessment::all();

        return view('assessment.show',['data' => $data, 'assessment' => $ass, 'jenisass' => $jenisass]);
    }

    public function import(Request $request)
    {
        $this->validate($request, [
        'file' => 'required|mimes:csv,xls,xlsx'
            ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            Excel::import(new AssessmentImport, $file);
            Session::flash('success','Data berhasil di import.');

            return redirect('/assessment');
        }        
    }

    public function export()
    {
        return Excel::download(new AssessmentExport, 'Assessment.xlsx');      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = explode("#",$request->assessments);

        foreach ($var as $key) {
            $cek = RiwayatAssessment::where('kode_pelatihan',$key)
                        ->where('npp',$request->npps)
                        ->get();

            $count = count($cek);
            if($count == 0){
                RiwayatAssessment::create([
                    'npp'     => $request->npps,
                    'kode_pelatihan'    => $key,
                    'status_image'    => '0',
                    'status_resume'    => '0',
                ]);
            }
        }
        
        return redirect('/assessment/detail/'.$request->npps);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // print_r($id);
        $data = RiwayatAssessment::select('*')
                    ->where('id_riwayat_assessment', $id)
                    ->first();
        // dd($data);
        RiwayatAssessment::where('id_riwayat_assessment',$id)->delete();
        return redirect('/assessment/detail/'.$data->npp);
    }

    public function uploadimage(Request $request)
    {
        // print_r($request->id_riwayat);
        $this->validate($request, [
            'file' => 'required',
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        // dd($ext);
        if($ext == 'png' || $ext == 'jpg' || $ext = 'jpeg'){
            
            $filename = $request->id_riwayat.'.'.$ext;
            RiwayatAssessment::where('id_riwayat_assessment', $request->id_riwayat)
                ->update(['status_image'=> 1,
                          'file_image'  => $filename
                        ]);

            $tujuan_upload = 'data_image';
            $file->move($tujuan_upload,$filename);
        }
        else{
            //flash pastikan file ekstensi benar
        }

        return redirect('/');
    }

    public function uploadresume(Request $request)
    {
        // dd("masuk");
        $this->validate($request, [
            'file' => 'required',
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        // dd($ext);
        if($ext == 'doc' || $ext == 'docx' || $ext = 'pdf'){
            
            $filename = $request->id_riwayat.'.'.$ext;
            RiwayatAssessment::where('id_riwayat_assessment', $request->id_riwayat)
                ->update(['status_resume' => 1,
                          'file_resume'   => $filename
                        ]);

            $tujuan_upload = 'data_resume';
            $file->move($tujuan_upload,$filename);
        }
        else{
            //flash pastikan file ekstensi benar
        }

        return redirect('/');
    }

    public function uploadfile(Request $request)
    {

        $this->validate($request, [
            'file' => 'required',
        ]);

        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $tahun = $request->tahun;
        
        if ($request->type == 1) {
            $type = "personal";
        }
        elseif ($request->type == 2) {
            $type = "management";
        }
        elseif ($request->type == 3) {
            $type = "rekaman_mp3";
        }
        elseif ($request->type == 4) {
            $type = "beq";
        }
        else{
            $type = "perilaku_atasan";
        }

        if(empty($request->tahun)){
            $request->tahun = date("Y");
        }

        //cek eksistensi file upload
        $data = Assessment::where('id', $request->id_as)->first();
        $ex = 'file_'.$type;
        $dataname = $data->$ex;
        if(!empty($dataname)){
            Session::flash('error','File '.$type.' telah dilakukan upload');
            return redirect('assessment/detail/'.$request->npp);
        }

        $filename = $request->id_as.'_'.$request->tahun.'_'.$request->npp.'.'.$ext;

        $tujuan_upload = 'file/'.$request->npp.'/'.$type;

        Assessment::where('id', $request->id_as)
            ->update([
                'file_'.$type => $tujuan_upload.'/'.$filename
            ]);

        $file->move($tujuan_upload,$filename);
        Session::flash('success','File '.$type.' berhasil di upload');
        return redirect('assessment/detail/'.$request->npp);
    }

    public function downloadfile(Request $request)
    {
        // dd($request->npp);
        
        if ($request->type == 1) {
            $type = "personal";
        }
        elseif ($request->type == 2) {
            $type = "management";
        }
        elseif ($request->type == 3) {
            $type = "rekaman_mp3";
        }
        elseif ($request->type == 4) {
            $type = "beq";
        }
        else{
            $type = "perilaku_atasan";
        }

        // dd($request);

        $data = Assessment::where('id', $request->id_as)->first();
        // dd($data);
        $ex = 'file_'.$type;
        $dataname = $data->$ex;
        if(empty($data->$ex)){
            Session::flash('error','File yang diunduh belum tersedia');
            return redirect('/assessment/detail/'.$request->npp);
        }

        $filepath = public_path('/').$dataname;
        return Response::download($filepath);
    }
}
