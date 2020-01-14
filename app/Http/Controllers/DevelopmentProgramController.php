<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Assessment;
use App\RiwayatAssessment;
use App\JenisAssessment;
use App\User;
use App\Role;
use Session;
use DB;
use Response;

class DevelopmentProgramController extends Controller
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
        if(!Auth::user()->hasRole('Admin')){
            return redirect('/assessment/detail/'.Auth::user()->npp);
        }

        $data = RiwayatAssessment::select('*')
                ->leftJoin('jenis_assessments', 'jenis_assessments.kode_pelatihan', '=', 'riwayat_assessments.kode_pelatihan')
                ->select('*')
                ->get();
        return view('development.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $cek = JenisAssessment::where('nama_pelatihan',$request->nama_pelatihan)->get();
        $count = count($cek);

        if($count == 0){
            $kode_pelatihan = JenisAssessment::orderBy('id', 'DESC')
                ->first();
            // dd($kode_pelatihan->kode_pelatihan + 1);
            $kode_pelatihan = $kode_pelatihan->kode_pelatihan+1;

            JenisAssessment::create([
                'kode_pelatihan'    => $kode_pelatihan,
                'nama_pelatihan'     => $request->nama_pelatihan,
                'link'    => $request->link
            ]);
        }

        return redirect('development/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(!Auth::user()->hasRole('Admin')){
            return redirect('/');
        }

        $data =  JenisAssessment::all();
        return view('development.show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        JenisAssessment::where('kode_pelatihan', $request->kode_pelatihan)
                ->update(['link' => $request->link,
                          'nama_pelatihan' => $request->nama_pelatihan]);
        return redirect('development/show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        RiwayatAssessment::where('id_riwayat_assessment', $id)
                ->update(['status_image' => 2,
                          'status_resume' =>2]);

         Session::flash('success','Data '.$id.' berhasil disetujui.');
        return redirect('/development');
    }

    public function update2($id)
    {
        RiwayatAssessment::where('id_riwayat_assessment', $id)
                ->update(['status_image' => 0,
                          'status_resume' =>0,
                          'file_image' => '',
                          'file_resume' => '']);

        Session::flash('error','Data '.$id.' telah dihapus.');
        return redirect('/development');
    }

    public function downloaddevelopmentimage($id)
    {
        $data = RiwayatAssessment::where('id_riwayat_assessment', $id)->first();
        $dataname = $data->file_image;
        $filepath = public_path('data_image/').$dataname;
        return Response::download($filepath);
    }

    public function downloaddevelopmentresume($id)
    {
        $data = RiwayatAssessment::where('id_riwayat_assessment', $id)->first();
        $dataname = $data->file_resume;
        $filepath = public_path('data_resume/').$dataname;
        return Response::download($filepath);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=JenisAssessment::where('kode_pelatihan',$id)->delete();
        return redirect('development/show');
    }
}
