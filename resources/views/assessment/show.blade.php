@extends('layouts.app') @section('title', 'Assessment') @section('content')

<div class="card">
    <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="card-header">
        <h3 class="card-title">Menu @yield('title')</h3>
        <h6 class="card-subtitle text-muted">Berikut ini adalah detail dari @yield('title').</h6>
        <div style="text-align: right;">
            @role('Admin')
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Upload</button>
            @endrole
            <a href="{{ url('assessment/export') }}" class="btn btn-success">Download</a>
        </div>
    </div>
 
    @if ($sukses = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $sukses }}</strong>
    </div>
    @endif

    @if ($error = Session::get('error'))
    <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $error }}</strong>
    </div>
    @endif
  </div>
</div>
</div>

    <div class="card-body">
      <!-- Search -->
      <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card-header">
        <h6 class="card-title">Assessment yang telah didaftarkan</h6>
        @foreach($assessment as $ass)
          <button class="btn btn-primary btn-sm">{{ $ass->nama_pelatihan }} 
            <a href="{{ url('assessment/destroy').'/'.$ass->id_riwayat_assessment }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
          </button>
        @endforeach  
      </div>
    </div>

    <div class="col-md-12">
      <div class="js-focus-state input-group input-group-sm mb-4">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fas fa-search"></span>
          </span>
        </div>
        <input id="datatableSearch" class="form-control" type="email" placeholder="Search activities" aria-label="Search activities">
      </div>
      <!-- End Search -->
      <div class="table-responsive-md u-datatable">
        <table class="js-datatable table table-borderless u-datatable__striped u-datatable__content u-datatable__trigger mb-5"
               data-dt-info="#datatableWithPaginationInfo"
               data-dt-page-length="15"
               data-dt-is-show-paging="true"

               data-dt-search="#datatableSearch"

               data-dt-pagination="datatablePagination"
               data-dt-pagination-classes="pagination mb-0"
               data-dt-pagination-items-classes="page-item"
               data-dt-pagination-links-classes="page-link"

               data-dt-pagination-next-classes="page-item"
               data-dt-pagination-next-link-classes="page-link"
               data-dt-pagination-next-link-markup='<span aria-hidden="true">»</span>'

               data-dt-pagination-prev-classes="page-item"
               data-dt-pagination-prev-link-classes="page-link"
               data-dt-pagination-prev-link-markup='<span aria-hidden="true">«</span>'>
          <thead>
            <tr class="text-uppercase font-size-1">
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  NPP
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Nama
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Jabatan
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Tahun
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Option
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Development
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
            </tr>
          </thead>
          <tbody class="font-size-1">
            @foreach($data as $dt)
            <tr>
              <td class="align-middle text-secondary font-weight-normal">{{ $dt->npp }}</td>
              <td class="align-middle">{{ $dt->nama }}</td>
              <td class="align-middle">{{ $dt->jabatan }}</td>
              <td class="align-middle">{{ $dt->hasil }}</td>
              <td class="align-middle">
                <button type="button" class="btn btn-icon btn-secondary transition-3d-hover btnFileDownload"
                  npp = "{{ $dt->npp }}"
                  id_as = "{{ $dt->id }}"
                  tahun = "{{ $dt->tahun }}"
                >
                  <span class="far fa-folder btn-icon__inner"></span>
                </button>

                <button type="button" class="btn btn-icon btn-secondary transition-3d-hover btnFileUpload"
                  npp = "{{ $dt->npp }}"
                  id_as = "{{ $dt->id }}"
                  tahun = "{{ $dt->tahun }}"
                >
                  <span class="fa fa-upload btn-icon__inner"></span>
                </button>
              </td>

              <td class="align-middle">
                <button class="btn btn-primary btn-sm transition-3d-hover detaildata"
                    npp = "{{ $dt->npp }}"
                    nama = "{{ $dt->nama  }}"
                    jabatan = "{{ $dt->jabatan  }}"
                  >
                  <i class="fa fa-plus"></i>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="d-flex justify-content-between align-items-center">
        <nav id="datatablePagination" aria-label="Activity pagination"></nav>

        <small id="datatableInfo" class="text-secondary"></small>
      </div>
    </div>
  </div>
</div>
      <!-- End Pagination -->
    </div>
</div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Data Excel (Assessment)</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('assessment/import') }}" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <label>Pilih file assessment</label>
                    <div class="form-group">
                        <input type="file" name="file" required="required">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Import</button>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="modalDetail" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          <span id="nppModal">Detail</span>
          -
          <span id="namaModal">Nama</span>
        </h4>
      </div>
      <div class="modal-body">
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Jabatan</span>
          </div>
          <div class="form-control" id="jabatanModal"></div>
        </div>
        <form method="post" action="{{ url('/assessment/store') }}" enctype="multipart/form-data">
            <div class="modal-header">
              <h6 class="modal-title">Tambah Development</h6>
            </div>
            <div class="modal-content">
              {{ csrf_field() }}
              <div class="position-relative">
                <a id="dropdownDangerInvoker" class="form-control btn btn-sm btn-primary dropdown-toggle" href="javascript:;" role="button"
                   aria-controls="dropdownDanger"
                   aria-haspopup="true"
                   aria-expanded="false"
                   data-unfold-target="#dropdownDanger"
                   data-unfold-type="css-animation"
                   data-unfold-duration="300"
                   data-unfold-delay="300"
                   data-unfold-hide-on-scroll="true"
                   data-unfold-animation-in="slideInUp"
                   data-unfold-animation-out="fadeOut">
                  Pilih Development
                </a>
                <div id="dropdownDanger" class="dropdown-menu dropdown-unfold" aria-labelledby="dropdownDangerInvoker">
                  <div class="modal-body">
                    @foreach($jenisass as $jenisass)
                    <div class="dropdown-item custom-control custom-checkbox custom-control-inline click">
                      <input type="checkbox" id="{{ $jenisass->kode_pelatihan }}" name="customCheckboxInline1" value="{{ $jenisass->kode_pelatihan }}" class="custom-control-input">
                      <label class="custom-control-label" for="{{ $jenisass->kode_pelatihan }}">{{ $jenisass->nama_pelatihan }}</label>
                    </div>
                    @endforeach
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <input hidden="" name="assessments" value="">
            <input hidden="" name="npps" value="">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="modalFileUpload" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload File</h4>
      </div>
      <div class="modal-body">
        <form class="js-focus-state" method="post" action="{{ url('assessment/upload/uploadfile') }}" enctype="multipart/form-data">
          <label class="sr-only" for="subscribeSrEmailExample1">Hasil Personal</label>
          {{ csrf_field() }}
          <div class="input-group">
            <select name="type">
              <option disabled selected=>Pilih kategori file</option>
              <option value="1">Hasil Personal</option>
              @role('Admin')
              <option value="2">Hasil Management</option>
              @endrole
              <option value="3">Rekaman MP3</option>
              <option value="4">BEQ</option>
              <option value="5">Perilaku Atasan</option>
            </select>
            <input type="file" class="form-control" name="file" required>
            <input type="text" id="id_as" name="id_as" hidden>
            <input type="text" id="tahun" name="tahun" hidden>
            <input type="text" id="npp" name="npp" hidden>
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Upload</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="modalFileDownload" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">File Tersimpan</h4>
      </div>
      <div class="modal-body">
        <div class="modal-content">
          <div class="modal-body">
            <form class="js-focus-state" method="post" action="{{ url('assessment/download/downloadfile') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="input-group">
                <select name="type">
                  <option disabled selected=>Pilih kategori file</option>
                  <option value="1">Hasil Personal</option>
                  @role('Admin')
                  <option value="2">Hasil Management</option>
                  @endrole
                  <option value="3">Rekaman MP3</option>
                  <option value="4">BEQ</option>
                  <option value="5">Perilaku Atasan</option>
                </select>
                <input type="text" value="" name="id_as" hidden>
                <input type="text" value="" name="tahun" hidden>
                <input type="text" value="" name="npp" hidden>
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Download</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
  </div>
    </div>
  </div>
</div>
@endsection 
@push('js') 
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  });

  $(document).on('click', '.detaildata', function()
  {
    $('#modalDetail').modal();
    $npp = $(this).attr('npp');
    $nama = $(this).attr('nama');
    $jabatan = $(this).attr('jabatan');
    $tahun = $(this).attr('tahun');
    $('input[name=npps]').val($npp);
    document.getElementById("nppModal").textContent= $(this).attr('npp');
    document.getElementById("namaModal").textContent= $(this).attr('nama');
    document.getElementById("jabatanModal").textContent= $(this).attr('jabatan');
    document.getElementById("hasilModal").textContent= $(this).attr('tahun');
  });

  $(document).on('click', '.btnFileUpload', function()
  {
    $('#modalFileUpload').modal();
    $npp = $(this).attr('npp');
    $id_as = $(this).attr('id_as');
    $tahun = $(this).attr('tahun');
    $('input[name=npp]').val($npp);
    $('input[name=id_as]').val($id_as);
    $('input[name=tahun]').val($tahun);
  });

  $(document).on('click', '.btnFileDownload', function()
  {
    $('#modalFileDownload').modal();
    console.log('masuk');
    $npp = $(this).attr('npp');
    $id_as = $(this).attr('id_as');
    $tahun = $(this).attr('tahun');
    console.log($npp);
    $('input[name=npp]').val($npp);
    $('input[name=id_as]').val($id_as);
    $('input[name=tahun]').val($tahun);
  });

  $(document).ready(function() {
    $(".click").click(function(){
        var favorite = [];
        $.each($("input[name='customCheckboxInline1']:checked"), function(){
            favorite.push($(this).val());
        });
        $('input[name=assessments]').val(favorite.join("#"));
    });
  });
</script>
@endpush