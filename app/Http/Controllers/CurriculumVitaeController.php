<?php

namespace App\Http\Controllers;

use Auth;
use App\Master;
use App\Summary;
use App\Interest;
use App\Referensi;
use App\KaryaTulis;
use App\Penghargaan;
use App\RiwayatJabatan;
use App\CurriculumVitae;
use App\RiwayatPelatihan;
use App\KategoriInterest;
use App\KeteranganKeluarga;
use Illuminate\Http\Request;
use App\PengalamanNarasumber;
use App\KeanggotaanOrganisasi;
use App\RiwayatPendidikanFormal;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class CurriculumVitaeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculumVitae = CurriculumVitae::with(
            'User', 'Summary', 
            'Interest.KategoriInterest',
            'PeminatanPosisiDirektur.MasterPeminatanPosisiDirektur',
            'RiwayatJabatan',
            'KeanggotaanOrganisasi',
            'Penghargaan',
            'RiwayatPendidikanFormal',
            'RiwayatPelatihan',
            'PengalamanNarasumber',
            'KaryaTulis',
            'Referensi',
            'KeteranganKeluarga')
            ->where('id_user', Auth::user()->id)->first();            
       
        return view('curriculum-vitae.index', compact('curriculumVitae'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function show(CurriculumVitae $curriculumVitae)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function edit($curriculumVitae)
    {
        $curriculumVitae = CurriculumVitae::findOrFail(Crypt::decryptString($curriculumVitae));
        $kategoriInterest = KategoriInterest::orderBy('id', 'ASC')->get();
        $jenisKelamin = Master::whereIn('id', [3, 4])->orderBy('id', 'ASC')->get();
        $YaTidak = Master::whereIn('id', [1, 2])->orderBy('id', 'ASC')->get();
        $InternalEksternal = Master::whereIn('id', [8, 9])->orderBy('id', 'ASC')->get();
        $StatusKeluarga = Master::whereIn('id', [5, 6, 7])->orderBy('id', 'ASC')->get();
        
        return view('curriculum-vitae.edit', compact('curriculumVitae', 'kategoriInterest', 'jenisKelamin', 'YaTidak', 'InternalEksternal', 'StatusKeluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $curriculumVitae)
    {
        $curriculumVitae = CurriculumVitae::findOrFail(Crypt::decryptString($curriculumVitae));   
        $curriculumVitae->update([
            'gelar_akademik' => $request->gelar_akademik,
            'biografi' => $request->biografi,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'jabatan_terakhir' => $request->jabatan_terakhir,
            'alamat_rumah' => $request->alamat_rumah,
            'handphone' => $request->handphone,
            'email' => $request->email,
            'npwp' => $request->npwp,
            'sosial_media' => $request->sosial_media,
        ]);

        if(!empty($request->file_foto)){
            $file = $request->file('file_foto');
            $ext = $file->getClientOriginalExtension();
            $filename = $curriculumVitae->id.'.'.$ext;
            $tujuan_upload = 'data_profile';
            $file->move($tujuan_upload,$filename);
            $curriculumVitae->file_foto = $filename;
        }

        $curriculumVitae->update();

        //to Summary
        $summary = Summary::where('id_cv', $curriculumVitae->id)->first();
        if(!empty($summary)){
            $summary->update([
                'keahlian' => $request->keahlian,
                'value' => $request->value,
                'visi' => $request->visi
            ]);
        }else{
            Summary::create([
                'keahlian' => $request->keahlian,
                'value' => $request->value,
                'visi' => $request->visi 
            ]);
        }

        //to Interest
        $count = Interest::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->id_kategori_interest as $key => $row){
            if($key < $count){
                $interest = Interest::where('id', $request->interest_id)->first();
                $interest->update([
                    'id_cv' => $curriculumVitae->id,
                    'id_kategori_interest' => $request->id_kategori_interest[$key]
                ]);
            }else{
                Interest::create([
                    'id_cv' => $curriculumVitae->id,
                    'id_kategori_interest' => $request->id_kategori_interest[$key]
                ]);
            }
        }
      
        //Riwayat Jabatan : tidak penugasan komisaris
        foreach($request->a_riwayat_jabatan as $key1 => $row){
            if($key1 < count($request->a_riwayat_penugasan_komisaris)){
                //ketika update
                $riwayat_jabatan = RiwayatJabatan::where('id', $request->a_id_riwayat_jabatan[$key1])->first();
                $riwayat_jabatan->update([
                    'id_cv' => $curriculumVitae->id,
                    'jabatan' => $request->a_riwayat_jabatan[$key1],
                    'instansi' => $request->a_riwayat_instansi[$key1],
                    'awal_menjabat' => $request->a_riwayat_awal_menjabat[$key1],
                    'akhir_menjabat' => $request->a_riwayat_akhir_menjabat[$key1],
                    'tupoksi' => $request->a_riwayat_tupoksi[$key1],
                    'achievement' => $request->a_riwayat_achievement[$key1],
                    'penugasan_komisaris' => 'Tidak',
                ]);
            }else{
                //ketika tambah baru
                RiwayatJabatan::create([
                    'id_cv' => $curriculumVitae->id,
                    'jabatan' => $request->a_riwayat_jabatan[$key1],
                    'instansi' => $request->a_riwayat_instansi[$key1],
                    'awal_menjabat' => $request->a_riwayat_awal_menjabat[$key1],
                    'akhir_menjabat' => $request->a_riwayat_akhir_menjabat[$key1],
                    'tupoksi' => $request->a_riwayat_tupoksi[$key1],
                    'achievement' => $request->a_riwayat_achievement[$key1],
                    'penugasan_komisaris' => 'Tidak',
                ]);
            }
        }

        //Riwayat Jabatan : penugasan komisaris
        $count = RiwayatJabatan::where('id_cv', $curriculumVitae->id)->where('penugasan_komisaris', 'Ya')->count();
        foreach($request->b_riwayat_jabatan as $key2 => $row){
            if($key2 < $count){
                //ketika update
                $riwayat_jabatan = RiwayatJabatan::where('id', $request->b_id_riwayat_jabatan[$key2])->first();
                $riwayat_jabatan->update([
                    'id_cv' => $curriculumVitae->id,
                    'jabatan' => $request->b_riwayat_jabatan[$key2],
                    'instansi' => $request->b_riwayat_instansi[$key2],
                    'awal_menjabat' => $request->b_riwayat_awal_menjabat[$key2],
                    'akhir_menjabat' => $request->b_riwayat_akhir_menjabat[$key2],
                    'tupoksi' => $request->b_riwayat_tupoksi[$key2],
                    'penugasan_komisaris' => 'Ya',
                ]);
            }else{
                //ketika tambah baru
                RiwayatJabatan::create([
                    'id_cv' => $curriculumVitae->id,
                    'jabatan' => $request->b_riwayat_jabatan[$key2],
                    'instansi' => $request->b_riwayat_instansi[$key2],
                    'awal_menjabat' => $request->b_riwayat_awal_menjabat[$key2],
                    'akhir_menjabat' => $request->b_riwayat_akhir_menjabat[$key2],
                    'tupoksi' => $request->b_riwayat_tupoksi[$key2],
                    'penugasan_komisaris' => 'Ya',
                ]);
            }
        }

        //Keanggotaan Organisasi
        $count = KeanggotaanOrganisasi::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->keanggotaan_organisasi_nama_kegiatan as $key3 => $row){
            if($key3 < $count){
                //ketika update
                $keanggotaanOrganisasi = KeanggotaanOrganisasi::where('id', $request->keanggotaan_organisasi_id[$key3])->first();
                $keanggotaanOrganisasi->update([
                    'id_cv' => $curriculumVitae->id,
                    'nama_kegiatan' => $request->keanggotaan_organisasi_nama_kegiatan[$key3],
                    'jabatan' => $request->keanggotaan_organisasi_jabatan[$key3],
                    'rentang_waktu' => $request->keanggotaan_organisasi_rentang_waktu[$key3],
                    'uraian_singkat' => $request->keanggotaan_organisasi_uraian_singkat[$key3],
                    'profesi' => $request->keanggotaan_organisasi_profesi[$key3],
                    'non_formal' => $request->keanggotaan_organisasi_non_formal[$key3],
                ]);
            }else{
                //ketika tambah baru
                KeanggotaanOrganisasi::create([
                    'id_cv' => $curriculumVitae->id,
                    'nama_kegiatan' => $request->keanggotaan_organisasi_nama_kegiatan[$key3],
                    'jabatan' => $request->keanggotaan_organisasi_jabatan[$key3],
                    'rentang_waktu' => $request->keanggotaan_organisasi_rentang_waktu[$key3],
                    'uraian_singkat' => $request->keanggotaan_organisasi_uraian_singkat[$key3],
                    'profesi' => $request->keanggotaan_organisasi_profesi[$key3],
                    'non_formal' => $request->keanggotaan_organisasi_non_formal[$key3],
                ]);
            }
        }

        //Penghargaan
        $count = Penghargaan::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->penghargaan_jenis_penghargaan as $key4 => $row){
            if($key4 < $count){
                //ketika update
                $penghargaan = Penghargaan::where('id', $request->penghargaan_id[$key4])->first();
                $penghargaan->update([
                    'id_cv' => $curriculumVitae->id,
                    'jenis_penghargaan' => $request->penghargaan_jenis_penghargaan[$key4],
                    'tingkat' => $request->penghargaan_tingkat[$key4],
                    'diberikan_oleh' => $request->penghargaan_diberikan_oleh[$key4],
                    'tahun' => $request->penghargaan_tahun[$key4]
                ]);
            }else{
                //ketika tambah baru
                Penghargaan::create([
                    'id_cv' => $curriculumVitae->id,
                    'jenis_penghargaan' => $request->penghargaan_jenis_penghargaan[$key4],
                    'tingkat' => $request->penghargaan_tingkat[$key4],
                    'diberikan_oleh' => $request->penghargaan_diberikan_oleh[$key4],
                    'tahun' => $request->penghargaan_tahun[$key4]
                ]);
            }
        }

        //Riwayat Pendidikan Formal
        $count = RiwayatPendidikanFormal::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->riwayat_pendidikan_jenjang as $key5 => $row){
            if($key5 < $count){
                //ketika update
                $riwayatPendidikanFormal = RiwayatPendidikanFormal::where('id', $request->riwayat_pendidikan_id[$key5])->first();
                $riwayatPendidikanFormal->update([
                    'id_cv' => $curriculumVitae->id,
                    'jenjang' => $request->riwayat_pendidikan_jenjang[$key5],
                    'jurusan' => $request->riwayat_pendidikan_jurusan[$key5],
                    'tahun_lulus' => $request->riwayat_pendidikan_tahun_lulus[$key5],
                    'perguruan_tinggi' => $request->riwayat_pendidikan_perguruan_tinggi[$key5],
                    'kota' => $request->riwayat_pendidikan_kota[$key5],
                    'penghargaan' => $request->riwayat_pendidikan_penghargaan[$key5],
                ]);
            }else{
                //ketika tambah baru
                RiwayatPendidikanFormal::create([
                    'id_cv' => $curriculumVitae->id,
                    'jenjang' => $request->riwayat_pendidikan_jenjang[$key5],
                    'jurusan' => $request->riwayat_pendidikan_jurusan[$key5],
                    'tahun_lulus' => $request->riwayat_pendidikan_tahun_lulus[$key5],
                    'perguruan_tinggi' => $request->riwayat_pendidikan_perguruan_tinggi[$key5],
                    'kota' => $request->riwayat_pendidikan_kota[$key5],
                    'penghargaan' => $request->riwayat_pendidikan_penghargaan[$key5],
                ]);
            }
        }

        //Riwayat Pelatihan
        $count = RiwayatPelatihan::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->riwayat_pelatihan_nama_pelatihan as $key6 => $row){
            if($key6 < $count){
                //ketika update
                $RiwayatPelatihan = RiwayatPelatihan::where('id', $request->riwayat_pelatihan_id[$key6])->first();
                $RiwayatPelatihan->update([
                    'id_cv' => $curriculumVitae->id,
                    'nama_pelatihan' => $request->riwayat_pelatihan_nama_pelatihan[$key6],
                    'penyelenggara' => $request->riwayat_pelatihan_penyelenggara[$key6],
                    'tahun_diklat' => $request->riwayat_pelatihan_tahun_diklat[$key6],
                    'nomor_sertifikasi' => $request->riwayat_pelatihan_nomor_sertifikasi[$key6],
                    'tingkat' => $request->riwayat_pelatihan_tingkat[$key6],
                    'jenis_diklat' => $request->riwayat_pelatihan_jenis_diklat[$key6],
                ]);
            }else{
                //ketika tambah baru
                RiwayatPelatihan::create([
                    'id_cv' => $curriculumVitae->id,
                    'nama_pelatihan' => $request->riwayat_pelatihan_nama_pelatihan[$key6],
                    'penyelenggara' => $request->riwayat_pelatihan_penyelenggara[$key6],
                    'tahun_diklat' => $request->riwayat_pelatihan_tahun_diklat[$key6],
                    'nomor_sertifikasi' => $request->riwayat_pelatihan_nomor_sertifikasi[$key6],
                    'tingkat' => $request->riwayat_pelatihan_tingkat[$key6],
                    'jenis_diklat' => $request->riwayat_pelatihan_jenis_diklat[$key6],
                ]);
            }
        }

        //Karya Tulis
        $count = KaryaTulis::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->karya_tulis_judul as $key7 => $row){
            if($key7 < $count){
                //ketika update
                $karyaTulis = KaryaTulis::where('id', $request->karya_tulis_id[$key7])->first();
                $karyaTulis->update([
                    'id_cv' => $curriculumVitae->id,
                    'judul' => $request->karya_tulis_judul[$key7],
                    'tahun' => $request->karya_tulis_tahun[$key7],
                ]);
            }else{
                //ketika tambah baru
                KaryaTulis::create([
                    'id_cv' => $curriculumVitae->id,
                    'judul' => $request->karya_tulis_judul[$key7],
                    'tahun' => $request->karya_tulis_tahun[$key7],
                ]);
            }
        }
        
        //Pengalaman Narasumber
        $count = PengalamanNarasumber::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->pengalaman_narasumber_acara as $key8 => $row){
            if($key8 < $count){
                //ketika update
                $pengalamanNarasumber = PengalamanNarasumber::where('id', $request->pengalaman_narasumber_id[$key8])->first();
                $pengalamanNarasumber->update([
                    'id_cv' => $curriculumVitae->id,
                    'acara' => $request->pengalaman_narasumber_acara[$key8],
                    'penyelenggara' => $request->pengalaman_narasumber_penyelenggara[$key8],
                    'tahun' => $request->pengalaman_narasumber_tahun[$key8],
                    'lokasi' => $request->pengalaman_narasumber_lokasi[$key8],
                ]);
            }else{
                //ketika tambah baru
                PengalamanNarasumber::create([
                    'id_cv' => $curriculumVitae->id,
                    'acara' => $request->pengalaman_narasumber_acara[$key8],
                    'penyelenggara' => $request->pengalaman_narasumber_penyelenggara[$key8],
                    'tahun' => $request->pengalaman_narasumber_tahun[$key8],
                    'lokasi' => $request->pengalaman_narasumber_lokasi[$key8],
                ]);
            }
        }

        //Referensi
        $count = Referensi::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->referensi_nama as $key9 => $row){
            if($key9 < $count){
                //ketika update
                $referensi = Referensi::where('id', $request->referensi_id[$key9])->first();
                $referensi->update([
                    'id_cv' => $curriculumVitae->id,
                    'nama' => $request->referensi_nama[$key9],
                    'perusahaan' => $request->referensi_perusahaan[$key9],
                    'jabatan' => $request->referensi_jabatan[$key9],
                    'no_hp' => $request->referensi_no_hp[$key9],
                ]);
            }else{
                //ketika tambah baru
                Referensi::create([
                    'id_cv' => $curriculumVitae->id,
                    'nama' => $request->referensi_nama[$key9],
                    'perusahaan' => $request->referensi_perusahaan[$key9],
                    'jabatan' => $request->referensi_jabatan[$key9],
                    'no_hp' => $request->referensi_no_hp[$key9],
                ]);
            }
        }

        //Keterangan Keluarga
        $count = KeteranganKeluarga::where('id_cv', $curriculumVitae->id)->count();
        foreach($request->keterangan_keluarga_nama as $key10 => $row){
            if($key10 < $count){
                //ketika update
                $keteranganKeluarga = KeteranganKeluarga::where('id', $request->keterangan_keluarga_id[$key10])->first();
                $keteranganKeluarga->update([
                    'id_cv' => $curriculumVitae->id,
                    'nama' => $request->keterangan_keluarga_nama[$key10],
                    'tempat_lahir' => $request->keterangan_keluarga_tempat_lahir[$key10],
                    'tanggal_lahir' => $request->keterangan_keluarga_tanggal_lahir[$key10],
                    'tanggal_menikah' => $request->keterangan_keluarga_tanggal_menikah[$key10],
                    'pekerjaan' => $request->keterangan_keluarga_pekerjaan[$key10],
                    'keterangan' => $request->keterangan_keluarga_keterangan[$key10],
                    'jenis_kelamin' => $request->keterangan_keluarga_jenis_kelamin[$key10],
                    'status_keluarga' => $request->keterangan_keluarga_status_keluarga[$key10],
                ]);
            }else{
                //ketika tambah baru
                KeteranganKeluarga::create([
                    'id_cv' => $curriculumVitae->id,
                    'nama' => $request->keterangan_keluarga_nama[$key10],
                    'tempat_lahir' => $request->keterangan_keluarga_tempat_lahir[$key10],
                    'tanggal_lahir' => $request->keterangan_keluarga_tanggal_lahir[$key10],
                    'tanggal_menikah' => $request->keterangan_keluarga_tanggal_menikah[$key10],
                    'pekerjaan' => $request->keterangan_keluarga_pekerjaan[$key10],
                    'keterangan' => $request->keterangan_keluarga_keterangan[$key10],
                    'jenis_kelamin' => $request->keterangan_keluarga_jenis_kelamin[$key10],
                    'status_keluarga' => $request->keterangan_keluarga_status_keluarga[$key10],
                ]);
            }
        }

        return redirect(url('curriculum-vitae/edit', Crypt::encryptString($curriculumVitae->id)))->with(['success' => 'Data Curriculum Vitae Berhasil Diubah']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroy($curriculumVitae)
    {
        $curriculumVitae = CurriculumVitae::findOrFail(Crypt::decryptString($curriculumVitae));   
        return redirect(url('curriculum-vitae/edit', Crypt::encryptString($curriculumVitae->id)))->with(['danger' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyInterest($id)
    {
        Interest::findOrFail($id)->delete();
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyRiwayatJabatan($id)
    {
        RiwayatJabatan::findOrFail($id)->delete();
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyKeanggotaanOrganisasi($id)
    {
        KeanggotaanOrganisasi::findOrFail($id)->delete();   
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyPenghargaan($id)
    {
        Penghargaan::findOrFail($id)->delete();   
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyRiwayatPendidikan($id)
    {
        RiwayatPendidikanFormal::findOrFail($id)->delete();
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyRiwayatPelatihan($id)
    {
        RiwayatPelatihan::findOrFail($id)->delete();
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyKaryaTulis($id)
    {
        KaryaTulis::findOrFail($id)->delete();
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyPengalamanNarasumber($id)
    {
        PengalamanNarasumber::findOrFail($id)->delete();
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyReferensi($id)
    {
        Referensi::findOrFail($id)->delete();
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurriculumVitae  $curriculumVitae
     * @return \Illuminate\Http\Response
     */
    public function destroyKeteranganKeluarga($id)
    {
        KeteranganKeluarga::findOrFail($id)->delete();
        return redirect(url()->previous())->with(['warning' => 'Data Item Curriculum Vitae Berhasil Hapus']);
    }
}
