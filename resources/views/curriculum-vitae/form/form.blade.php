<!-- Update Avatar Form -->
<div class="media align-items-center mb-7">
    <div class="u-lg-avatar mr-3">
        <img class="img-fluid rounded-circle" src="{{ asset('data_profile')}}/{{ $curriculumVitae->file_foto }}" alt="Image Description">
    </div>
    <div class="media-body">
        <input type="file" name="file_foto" class="form-control col-md-4" accept="image/*">
    </div>
</div>
<!-- End Update Avatar Form -->

<div class="row">
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Nama Lengkap
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="name" value="{{ $curriculumVitae->User->name }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Gelar Akademik
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="gelar_akademik" value="{{  $curriculumVitae->gelar_akademik }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-12 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Biografi
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <textarea type="text" class="form-control" name="biografi" rows="6" required>{{  $curriculumVitae->biografi }}</textarea>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            NIK    
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="nik" value="{{  $curriculumVitae->nik }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Tempat Lahir    
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="tempat_lahir" value="{{  $curriculumVitae->tempat_lahir }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Tanggal Lahir    
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="date" class="form-control" name="tanggal_lahir" value="{{  $curriculumVitae->tanggal_lahir }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Jenis Kelamin    
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <select name="jenis_kelamin" class="form-control {{ $errors->has('role') ? 'is-invalid':'' }}" required>
                <option value="">Pilih</option>
                @foreach ($jenisKelamin as $row)
                <option value="{{ $row->id }}" {{ $curriculumVitae->jenis_kelamin == $row->id ? 'selected="selected"' : '' }}>{{ $row->nama }}</option>
                @endforeach
            </select>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Agama 
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="agama" value="{{  $curriculumVitae->agama }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Jabatan Terakhir 
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="jabatan_terakhir" value="{{  $curriculumVitae->jabatan_terakhir }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Alamat Rumah 
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="alamat_rumah" value="{{  $curriculumVitae->alamat_rumah }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Handphone
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="handphone" value="{{  $curriculumVitae->handphone }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Email
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="email" value="{{  $curriculumVitae->email }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            NPWP
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="npwp" value="{{  $curriculumVitae->npwp }}" required>
        </div>
        </div>
    </div>
    <div class="col-sm-6 mb-6">
        <div class="js-form-message">
        <label class="form-label">
            Sosial Media
            <span class="text-danger">*</span>
        </label>

        <div class="form-group">
            <input type="text" class="form-control" name="sosial_media" value="{{  $curriculumVitae->sosial_media }}" required>
        </div>
        </div>
    </div>
</div>

<!-- Include -->
@include('curriculum-vitae.form.form-riwayat')

    