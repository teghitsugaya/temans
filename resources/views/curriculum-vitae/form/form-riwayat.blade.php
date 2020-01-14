<div class="mb-5">
    <h2 class="h5 mb-0">Summary</h2>
    <p>Keterangan summary yang perlu diisi.</p>
</div>
<div class="row">
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Keahlian/kompetensi yang dikuasai
            <span class="text-danger">*</span>
        </label>
    
        <div class="form-group">
            <input type="text" class="form-control" name="keahlian" value="{{ $curriculumVitae->Summary->first()->keahlian }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Value Pribadi :
            <span class="text-danger">*</span>
        </label>
    
        <div class="form-group">
            <input type="text" class="form-control" name="value" value="{{ $curriculumVitae->Summary->first()->value }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Visi Pribadi :
            <span class="text-danger">*</span>
        </label>
    
        <div class="form-group">
            <input type="text" class="form-control" name="visi" value="{{ $curriculumVitae->Summary->first()->visi }}" required>
        </div>
        </div>
    </div>
</div>

<div class="mb-5">
    <h2 class="h5 mb-0">Interest</h2>
    <p>Keterangan interest yang perlu diisi.</p>
</div>
<div class="row">
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Interest Pribadi
            <span class="text-danger">*</span>
        </label>
        
        @foreach ($curriculumVitae->Interest as $item)
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <input type="text" name="interest_id" value="{{ $item->id }}" hidden>
                    <select name="id_kategori_interest[]" class="form-control {{ $errors->has('id_kategori_interest') ? 'is-invalid':'' }}" required>
                        <option value="">Pilih</option>
                        @foreach ($kategoriInterest as $row)
                        <option value="{{ $row->id }}" {{ $item->id_kategori_interest == $row->id ? 'selected="selected"' : '' }}>{{$row->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-1">
                <div class="js-form-message">
                <div class="form-group">
                    <a href="{{ url('curriculum-vitae/interest', $item->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="interest"></div>
        <div class="form-group">
            <a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-interest form-control"><span class="fas fa-plus small mr-2"></span> Tambah Interest</a>
        </div>
        </div>
    </div>
</div>

<div class="mb-5">
    <h2 class="h5 mb-0">Riwayat Jabatan</h2>
    <p>Keterangan riwaya jabatan yang ada.</p>
</div>
@foreach ($curriculumVitae->RiwayatJabatan as $row)
   @if($row->penugasan_komisaris == "Tidak")
    <div class="row">
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Jabatan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="a_riwayat_jabatan[]" value="{{ $row->jabatan }}" required>
                <input type="text" class="form-control" name="a_riwayat_penugasan_komisaris[]" value="Tidak" required hidden>
                <input type="text" class="form-control" name="a_id_riwayat_jabatan[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Instansi
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="a_riwayat_instansi[]" value="{{ $row->instansi }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Awal Menjabat
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="a_riwayat_awal_menjabat[]" value="{{ $row->awal_menjabat }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Akhir Menjabat
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="a_riwayat_akhir_menjabat[]" value="{{ $row->akhir_menjabat }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Tupoksi
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="a_riwayat_tupoksi[]" value="{{ $row->tupoksi }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Achievment
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="a_riwayat_achievement[]" value="{{ $row->achievement }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/riwayat-jabatan', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
   @endif
@endforeach

<div class="row riwayat_jabatan"></div>
<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-riwayat-jabatan"><span class="fas fa-plus small mr-2"></span> Tambah Jabatan</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Riwayat Jabatan Penugasan Komisaris</h2>
    <p>Keterangan riwayat jabatan penugasan komisari bila ada.</p>
</div>
@foreach ($curriculumVitae->RiwayatJabatan as $row)
    @if($row->penugasan_komisaris == "Ya")
        <div class="row">
            <div class="col-md-3">
                <div class="js-form-message">
                <label class="form-label mt-1-5">
                    Jabatan
                    <span class="text-danger">*</span>
                </label>
            
                <div class="form-group">
                    <input type="text" class="form-control" name="b_riwayat_jabatan[]" value="{{ $row->jabatan }}" required>
                    <input type="text" class="form-control" name="b_riwayat_penugasan_komisaris[]" value="Ya" required hidden>
                    <input type="text" class="form-control" name="b_id_riwayat_jabatan[]" value="{{ $row->id }}" required hidden>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="js-form-message">
                <label class="form-label mt-1-5">
                    Instansi
                    <span class="text-danger">*</span>
                </label>
            
                <div class="form-group">
                    <input type="text" class="form-control" name="b_riwayat_instansi[]" value="{{ $row->instansi }}" required>
                </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="js-form-message">
                <label class="form-label">
                    Awal Menjabat
                </label>
            
                <div class="form-group">
                    <input type="text" class="form-control" name="b_riwayat_awal_menjabat[]" value="{{ $row->awal_menjabat }}" required>
                </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="js-form-message">
                <label class="form-label">
                    Akhir Menjabat
                </label>
            
                <div class="form-group">
                    <input type="text" class="form-control" name="b_riwayat_akhir_menjabat[]" value="{{ $row->akhir_menjabat }}" required>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="js-form-message">
                <label class="form-label mt-1-5">
                    Tupoksi
                    <span class="text-danger">*</span>
                </label>
            
                <div class="form-group">
                    <input type="text" class="form-control" name="b_riwayat_tupoksi[]" value="{{ $row->tupoksi }}" required>
                </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="js-form-message">
                <label class="form-label mt-1-5">
                    Hapus
                    <span class="text-danger"></span>
                </label>
            
                <div class="form-group">
                    <a href="{{ url('curriculum-vitae/riwayat-jabatan', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

<div class="riwayat_jabatan_penugasan_komisaris"></div>
<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-riwayat-jabatan-penugasan-komisaris mb-6"><span class="fas fa-plus small mr-2"></span> Tambah Jabatan</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Keanggotaan Organisasi</h2>
    <p>Keterangan keanggotaan organisasi yang perlu diisi.</p>
</div>

@foreach ($curriculumVitae->KeanggotaanOrganisasi as $row)
    <div class="row">
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Nama Kegiatan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keanggotaan_organisasi_nama_kegiatan[]" value="{{ $row->nama_kegiatan }}" required>
                <input type="text" class="form-control" name="keanggotaan_organisasi_id[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Jabatan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keanggotaan_organisasi_jabatan[]" value="{{ $row->jabatan }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Rentang Waktu
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keanggotaan_organisasi_rentang_waktu[]" value="{{ $row->rentang_waktu }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Uraian Singkat
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keanggotaan_organisasi_uraian_singkat[]" value="{{ $row->uraian_singkat }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Profesi
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keanggotaan_organisasi_profesi[]" value="{{ $row->profesi }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Non Formal
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <select name="keanggotaan_organisasi_non_formal[]" class="form-control {{ $errors->has('role') ? 'is-invalid':'' }}" required>
                    <option value="">Pilih</option>
                    @foreach ($YaTidak as $item)
                    <option value="{{ $item->nama }}" {{ $row->non_formal == $item->nama ? 'selected="selected"' : '' }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/keanggotaan-organisasi', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
@endforeach

<div class="row keanggotaan-organisasi"></div>

<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-keanggotaan-organisasi"><span class="fas fa-plus small mr-2"></span> Keanggota Organisasi</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Penghargaan</h2>
    <p>Keterangan penghargaan yang perlu diisi.</p>
</div>

@foreach ($curriculumVitae->Penghargaan as $row)
    <div class="row">
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Jenis Penghargaan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="penghargaan_jenis_penghargaan[]" value="{{ $row->jenis_penghargaan }}" required>
                <input type="text" class="form-control" name="penghargaan_id[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Tingkat
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="penghargaan_tingkat[]" value="{{ $row->tingkat }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Tingkat
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="penghargaan_diberikan_oleh[]" value="{{ $row->diberikan_oleh }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label">
                Tahun
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="penghargaan_tahun[]" value="{{ $row->tahun }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/penghargaan', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
@endforeach

<div class="penghargaan"></div>

<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-penghargaan"><span class="fas fa-plus small mr-2"></span> Penghargaan</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Riwayat Pendidikan Formal</h2>
    <p>Keterangan Riwayat Pendidikan Formal yang perlu diisi.</p>
</div>

@foreach ($curriculumVitae->RiwayatPendidikanFormal as $row)
    <div class="row">
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Jenjang
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pendidikan_jenjang[]" value="{{ $row->jenjang }}" required>
                <input type="text" class="form-control" name="riwayat_pendidikan_id[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Jurusan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pendidikan_jurusan[]" value="{{ $row->jurusan }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Tahun Lulus
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pendidikan_tahun_lulus[]" value="{{ $row->tahun_lulus }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Perguruan Tinggi
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pendidikan_perguruan_tinggi[]" value="{{ $row->perguruan_tinggi }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Kota
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pendidikan_kota[]" value="{{ $row->kota }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Penghargaan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pendidikan_penghargaan[]" value="{{ $row->penghargaan }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/riwayat-pendidikan', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
@endforeach

<div class="riwayat-pendidikan-formal"></div>

<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-riwayat-pendidikan-formal"><span class="fas fa-plus small mr-2"></span> Riwayat Pendidikan</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Riwayat Pelatihan</h2>
    <p>Keterangan Riwayat Pelatihan yang perlu diisi.</p>
</div>

@foreach ($curriculumVitae->RiwayatPelatihan as $row)
    <div class="row">
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Nama Pelatihan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pelatihan_nama_pelatihan[]" value="{{ $row->nama_pelatihan }}" required>
                <input type="text" class="form-control" name="riwayat_pelatihan_id[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Penyelenggara
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pelatihan_penyelenggara[]" value="{{ $row->penyelenggara }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Tahun Diklat
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pelatihan_tahun_diklat[]" value="{{ $row->tahun_diklat }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Nomor Sertifikasi
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pelatihan_nomor_sertifikasi[]" value="{{ $row->nomor_sertifikasi }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Tingkat
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="riwayat_pelatihan_tingkat[]" value="{{ $row->tingkat }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Jenis Diklat
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <select name="riwayat_pelatihan_jenis_diklat[]" class="form-control {{ $errors->has('jenis_diklat') ? 'is-invalid':'' }}" required>
                    <option value="">Pilih</option>
                    @foreach ($InternalEksternal as $item)
                    <option value="{{ $item->nama }}" {{ $row->jenis_diklat == $item->nama ? 'selected="selected"' : '' }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label mt-1-5">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/riwayat-pelatihan', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
@endforeach

<div class="riwayat-pelatihan"></div>

<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-riwayat-pelatihan"><span class="fas fa-plus small mr-2"></span> Riwayat Pelatihan</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Karya Tulis</h2>
    <p>Keterangan karya tulis yang perlu diisi.</p>
</div>

@foreach ($curriculumVitae->KaryaTulis as $row)
    <div class="row">
        <div class="col-md-9">
            <div class="js-form-message">
            <label class="form-label">
                Judul
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="karya_tulis_judul[]" value="{{ $row->judul }}" required>
                <input type="text" class="form-control" name="karya_tulis_id[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label">
                Tahun
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="karya_tulis_tahun[]" value="{{ $row->tahun }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/karya-tulis', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
@endforeach

<div class="karya-tulis"></div>

<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-karya-tulis"><span class="fas fa-plus small mr-2"></span> Karya Tulis</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Pengalaman Narasumber</h2>
    <p>Keterangan Pengalaman Narasumber yang perlu diisi.</p>
</div>

@foreach ($curriculumVitae->PengalamanNarasumber as $row)
    <div class="row">
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Acara
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="pengalaman_narasumber_acara[]" value="{{ $row->acara }}" required>
                <input type="text" class="form-control" name="pengalaman_narasumber_id[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Penyelenggara
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="pengalaman_narasumber_penyelenggara[]" value="{{ $row->penyelenggara }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label">
                Tahun
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="pengalaman_narasumber_tahun[]" value="{{ $row->tahun }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Lokasi
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="pengalaman_narasumber_lokasi[]" value="{{ $row->lokasi }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/pengalaman-narasumber', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
@endforeach

<div class="pengalaman-narasumber"></div>

<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-pengalaman-narasumber"><span class="fas fa-plus small mr-2"></span> Pengalaman Narasumber</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Referensi</h2>
    <p>Keterangan Referensi yang perlu diisi.</p>
</div>

@foreach ($curriculumVitae->Referensi as $row)
    <div class="row">
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Nama
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="referensi_nama[]" value="{{ $row->nama }}" required>
                <input type="text" class="form-control" name="referensi_id[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Perusahaan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="referensi_perusahaan[]" value="{{ $row->perusahaan }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Jabatan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="referensi_jabatan[]" value="{{ $row->jabatan }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="js-form-message">
            <label class="form-label">
                No HP
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="referensi_no_hp[]" value="{{ $row->no_hp }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="js-form-message">
            <label class="form-label">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/referensi', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
@endforeach

<div class="referensi"></div>

<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover add-referensi"><span class="fas fa-plus small mr-2"></span> Referensi</a>

<div class="mb-5 mt-6">
    <h2 class="h5 mb-0">Keterangan Keluarga</h2>
    <p>Keterangan Keluarga yang perlu diisi.</p>
</div>

@foreach ($curriculumVitae->KeteranganKeluarga as $row)
    <div class="row">
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Nama
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keterangan_keluarga_nama[]" value="{{ $row->nama }}" required>
                <input type="text" class="form-control" name="keterangan_keluarga_id[]" value="{{ $row->id }}" required hidden>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Tempat Lahir
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keterangan_keluarga_tempat_lahir[]" value="{{ $row->tempat_lahir }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Tanggal Lahir
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="date" class="form-control" name="keterangan_keluarga_tanggal_lahir[]" value="{{ $row->tanggal_lahir }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Tanggal Menikah
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="date" class="form-control" name="keterangan_keluarga_tanggal_menikah[]" value="{{ $row->tanggal_menikah }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Pekerjaan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keterangan_keluarga_pekerjaan[]" value="{{ $row->pekerjaan }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Keterangan
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <input type="text" class="form-control" name="keterangan_keluarga_keterangan[]" value="{{ $row->keterangan }}" required>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Jenis Kelamin
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <select name="keterangan_keluarga_jenis_kelamin[]" class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid':'' }}" required>
                    <option value="">Pilih</option>
                    @foreach ($jenisKelamin as $item)
                    <option value="{{ $item->nama }}" {{ $row->jenis_kelamin == $item->nama ? 'selected="selected"' : '' }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Status Keluarga
                <span class="text-danger">*</span>
            </label>
        
            <div class="form-group">
                <select name="keterangan_keluarga_status_keluarga[]" class="form-control {{ $errors->has('status_keluarga') ? 'is-invalid':'' }}" required>
                    <option value="">Pilih</option>
                    @foreach ($StatusKeluarga as $item)
                    <option value="{{ $item->nama }}" {{ $row->status_keluarga == $item->nama ? 'selected="selected"' : '' }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="js-form-message">
            <label class="form-label">
                Hapus
                <span class="text-danger"></span>
            </label>
        
            <div class="form-group">
                <a href="{{ url('curriculum-vitae/keterangan-keluarga', $row->id) }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </div>
    <hr>
@endforeach

<div class="keterangan-keluarga"></div>

<a href="javascript:void(0);" class="btn btn-sm btn-primary text-nowrap transition-3d-hover mt-0 mb-6 add-keterangan-keluarga"><span class="fas fa-plus small mr-2"></span> Keterangan Keluarga</a>

