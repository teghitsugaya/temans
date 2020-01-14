<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\RiwayatAssessment;
use App\JenisAssessment;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = User::orderBy('id')->get()->count();
        
        // log activity
        activity()->log('Akses Menu Home');

        if(Auth::user()->hasRole('User')){
            $assessment = RiwayatAssessment::where('npp', Auth::user()->npp)
            ->leftJoin('jenis_assessments', 'jenis_assessments.kode_pelatihan', '=', 'riwayat_assessments.kode_pelatihan')
            ->select('*')
            ->limit(3)
            ->get();

            return view('home.home',['user' => $user, 'assessment' => $assessment]);
        }

        return view('home.home', compact('user'));
    }

    public function viewall()
    {   
        $user = User::orderBy('id')->get()->count();
        activity()->log('Akses Menu Home');
        
        if(Auth::user()->hasRole('User')){
            $assessment = RiwayatAssessment::where('npp', Auth::user()->npp)
            ->leftJoin('jenis_assessments', 'jenis_assessments.kode_pelatihan', '=', 'riwayat_assessments.kode_pelatihan')
            ->select('*')
            ->get();

            return view('home.viewall',['user' => $user, 'assessment' => $assessment]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the application documentation.
     *
     * @return \Illuminate\Http\Response
     */
    public function help()
    {        
        return view('home.help');
    }

    /**
     * Show the application documentation.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {        
        return view('home.about');
    }
}
