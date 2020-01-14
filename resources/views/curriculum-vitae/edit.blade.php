@extends('layouts.app') @section('title', 'Edit Data Curriculum Vitae') @section('content')

<div class="bg-light">
        <div class="container space-2">

            @if (session('success'))
            @alert(['type' => 'success'])
            {!! session('success') !!}
            @endalert
            @elseif (session('warning'))
            @alert(['type' => 'warning'])
            {!! session('warning') !!}
            @endalert
            @elseif (session('danger'))
            @alert(['type' => 'danger'])
            {!! session('danger') !!}
            @endalert
            @endif

            <form action="{{ url('curriculum-vitae/update',  Crypt::encryptString($curriculumVitae->id)) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                
                <!--include form-->
                @include('curriculum-vitae.form.form')
    
                <div class="form-group float-right">
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-warning text-nowrap transition-3d-hover"><span class="fas fa-arrow-left small mr-2"></span> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary text-nowrap transition-3d-hover"><span class="fas fa-save small mr-2"></span> Simpan</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('js')
<script>
    $(function(){
        var i = 1;
        $('.add-riwayat-jabatan').click(function(){
            i++;
            var riwayat_jabatan = '<div class="col-md-2"> <div class="js-form-message"> <label class="form-label mt-1-5"> Jabatan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="a_riwayat_jabatan[]" required> </div> </div></div><div class="col-md-2"> <div class="js-form-message"> <label class="form-label mt-1-5"> Instansi <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="a_riwayat_instansi[]" required> </div> </div></div><div class="col-md-1"> <div class="js-form-message"> <label class="form-label"> Awal Menjabat</label> <div class="form-group"> <input type="text" class="form-control" name="a_riwayat_awal_menjabat[]" required> </div> </div></div><div class="col-md-1"> <div class="js-form-message"> <label class="form-label"> Akhir Menjabat</label> <div class="form-group"> <input type="text" class="form-control" name="a_riwayat_akhir_menjabat[]" required> </div> </div></div><div class="col-md-2"> <div class="js-form-message"> <label class="form-label mt-1-5"> Tupoksi <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="a_riwayat_tupoksi[]" required> </div> </div></div><div class="col-md-2"> <div class="js-form-message"> <label class="form-label mt-1-5"> Achievment <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="a_riwayat_achievement[]" required> </div> </div></div>'
            $('div.riwayat_jabatan').append(riwayat_jabatan)
        })
        
        $('.add-riwayat-jabatan-penugasan-komisaris').click(function(){
            i++;
            var riwayat_jabatan_penugasan_komisaris = '<div class="row"> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label mt-1-5"> Jabatan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="b_riwayat_jabatan[]" required> <input type="text" class="form-control" name="b_riwayat_penugasan_komisaris[]" value="Ya" required hidden> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label mt-1-5"> Instansi <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="b_riwayat_instansi[]" required> </div> </div> </div> <div class="col-md-1"> <div class="js-form-message"> <label class="form-label"> Awal Menjabat </label> <div class="form-group"> <input type="text" class="form-control" name="b_riwayat_awal_menjabat[]" required> </div> </div> </div> <div class="col-md-1"> <div class="js-form-message"> <label class="form-label"> Akhir Menjabat </label> <div class="form-group"> <input type="text" class="form-control" name="b_riwayat_akhir_menjabat[]" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label mt-1-5"> Tupoksi <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="b_riwayat_tupoksi[]" required> </div> </div> </div> </div>'
            $('div.riwayat_jabatan_penugasan_komisaris').append(riwayat_jabatan_penugasan_komisaris)
        })

        $('.add-interest').click(function(){
            i++;
            var interest = '<div class="form-group"> <select name="id_kategori_interest[]" class="form-control {{ $errors->has('id_kategori_interest') ? 'is-invalid':'' }}"> <option value="">Pilih</option> @foreach ($kategoriInterest as $row) <option value="{{ $row->id }}">{{$row->nama}}</option> @endforeach </select> </div>'
            $('div.interest').append(interest)
        })

        $('.add-keanggotaan-organisasi').click(function(){
            i++;
            var keanggotaan_organisasi = ' <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Nama Kegiatan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keanggotaan_organisasi_nama_kegiatan[]" value="{{ $row->nama_kegiatan }}" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Jabatan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keanggotaan_organisasi_jabatan[]" value="{{ $row->jabatan }}" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Rentang Waktu <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keanggotaan_organisasi_rentang_waktu[]" value="{{ $row->rentang_waktu }}" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Uraian Singkat <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keanggotaan_organisasi_uraian_singkat[]" value="{{ $row->uraian_singkat }}" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Profesi <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keanggotaan_organisasi_profesi[]" value="{{ $row->profesi }}" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Non Formal <span class="text-danger">*</span> </label> <div class="form-group"> <select name="keanggotaan_organisasi_non_formal[]" class="form-control {{ $errors->has('role') ? 'is-invalid':'' }}" required> <option value="">Pilih</option> @foreach ($YaTidak as $item) <option value="{{ $item->nama }}" {{ $row->non_formal == $item->nama ? 'selected="selected"' : '' }}>{{ $item->nama }}</option> @endforeach </select> </div> </div> </div>'
            $('div.keanggotaan-organisasi').append(keanggotaan_organisasi)
        })

        $('.add-penghargaan').click(function(){
            i++;
            var penghargaan = '<div class="row"> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Jenis Penghargaan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="penghargaan_jenis_penghargaan[]" value="{{ $row->jenis_penghargaan }}" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Tingkat <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="penghargaan_tingkat[]" value="{{ $row->tingkat }}" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Tingkat <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="penghargaan_diberikan_oleh[]" value="{{ $row->diberikan_oleh }}" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Tahun <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="penghargaan_tahun[]" value="{{ $row->tahun }}" required> </div> </div> </div> </div>'
            $('div.penghargaan').append(penghargaan)
        })

        $('.add-riwayat-pendidikan-formal').click(function(){
            i++;
            var riwayat_pendidikan_formal = ' <div class="row"> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Jenjang <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pendidikan_jenjang[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Jurusan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pendidikan_jurusan[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Tahun Lulus <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pendidikan_tahun_lulus[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Perguruan Tinggi <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pendidikan_perguruan_tinggi[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Kota <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pendidikan_kota[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Penghargaan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pendidikan_penghargaan[]" required> </div> </div> </div> </div>'
            $('div.riwayat-pendidikan-formal').append(riwayat_pendidikan_formal)
        })

        $('.add-riwayat-pelatihan').click(function(){
            i++;
            var riwayat_pelatihan = ' <div class="row"> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Nama Pelatihan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pelatihan_nama_pelatihan[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Penyelenggara <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pelatihan_penyelenggara[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Tahun Diklat <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pelatihan_tahun_diklat[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Nomor Sertifikasi <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pelatihan_nomor_sertifikasi[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Tingkat <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="riwayat_pelatihan_tingkat[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Jenis Diklat <span class="text-danger">*</span> </label> <div class="form-group"> <select name="riwayat_pelatihan_jenis_diklat[]" class="form-control {{ $errors->has('jenis_diklat') ? 'is-invalid':'' }}" required> <option value="">Pilih</option> @foreach ($InternalEksternal as $item) <option value="{{ $item->nama }}" {{ $row->jenis_diklat == $item->nama ? 'selected="selected"' : '' }}>{{ $item->nama }}</option> @endforeach </select> </div> </div> </div> </div>'
            $('div.riwayat-pelatihan').append(riwayat_pelatihan)
        })

        $('.add-karya-tulis').click(function(){
            i++;
            var karya_tulis = '<div class="row"> <div class="col-md-9"> <div class="js-form-message"> <label class="form-label"> Judul <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="karya_tulis_judul[]" value="{{ $row->judul }}" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Tahun <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="karya_tulis_tahun[]" value="{{ $row->tahun }}" required> </div> </div> </div> </div>'
            $('div.karya-tulis').append(karya_tulis)
        })

        $('.add-pengalaman-narasumber').click(function(){
            i++;
            var pengalaman_narasumber = '<div class="row"> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Acara <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="pengalaman_narasumber_acara[]" value="{{ $row->acara }}" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Penyelenggara <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="pengalaman_narasumber_penyelenggara[]" value="{{ $row->penyelenggara }}" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> Tahun <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="pengalaman_narasumber_tahun[]" value="{{ $row->tahun }}" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Lokasi <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="pengalaman_narasumber_lokasi[]" value="{{ $row->lokasi }}" required> </div> </div> </div> </div>'
            $('div.pengalaman-narasumber').append(pengalaman_narasumber)
        })

        $('.add-referensi').click(function(){
            i++;
            var referensi = '<div class="row"> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Nama <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="referensi_nama[]" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Perusahaan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="referensi_perusahaan[]"  required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Jabatan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="referensi_jabatan[]" required> </div> </div> </div> <div class="col-md-2"> <div class="js-form-message"> <label class="form-label"> No HP <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="referensi_no_hp[]" required> </div> </div> </div> </div>'
            $('div.referensi').append(referensi)
        })

        $('.add-keterangan-keluarga').click(function(){
            i++;
            var keterangan_keluarga = '<div class="row"> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Nama <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keterangan_keluarga_nama[]" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Tempat Lahir <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keterangan_keluarga_tempat_lahir[]" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Tanggal Lahir <span class="text-danger">*</span> </label> <div class="form-group"> <input type="date" class="form-control" name="keterangan_keluarga_tanggal_lahir[]" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Tanggal Menikah <span class="text-danger">*</span> </label> <div class="form-group"> <input type="date" class="form-control" name="keterangan_keluarga_tanggal_menikah[]"  required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Pekerjaan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keterangan_keluarga_pekerjaan[]" required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Keterangan <span class="text-danger">*</span> </label> <div class="form-group"> <input type="text" class="form-control" name="keterangan_keluarga_keterangan[]"  required> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Jenis Kelamin <span class="text-danger">*</span> </label> <div class="form-group"> <select name="keterangan_keluarga_jenis_kelamin[]" class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid':'' }}" required> <option value="">Pilih</option> @foreach ($jenisKelamin as $item) <option value="{{ $item->nama }}" {{ $row->jenis_kelamin == $item->nama ? 'selected="selected"' : '' }}>{{ $item->nama }}</option> @endforeach </select> </div> </div> </div> <div class="col-md-3"> <div class="js-form-message"> <label class="form-label"> Status Keluarga <span class="text-danger">*</span> </label> <div class="form-group"> <select name="keterangan_keluarga_status_keluarga[]" class="form-control {{ $errors->has('status_keluarga') ? 'is-invalid':'' }}" required> <option value="">Pilih</option> @foreach ($StatusKeluarga as $item) <option value="{{ $item->nama }}" {{ $row->status_keluarga == $item->nama ? 'selected="selected"' : '' }}>{{ $item->nama }}</option> @endforeach </select> </div> </div> </div> </div> <hr>'
            $('div.keterangan-keluarga').append(keterangan_keluarga)
        })
    })
</script>
@endpush