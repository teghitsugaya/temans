@extends('layouts.app') @section('title', 'Development') @section('content')

<div class="card">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="card-header">
        <h3 class="card-title">Menu @yield('title')</h3>
        <h6 class="card-subtitle text-muted">Berikut ini adalah detail dari @yield('title').</h6>
        <div style="text-align: right;">
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModalAdd">Tambah Development</button>
        </div>
    </div>
 
    {{-- notifikasi sukses --}}
    @if ($sukses = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $sukses }}</strong>
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
                  Kode Pelatihan
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Nama Pelatihan
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Link
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
            </tr>
          </thead>
          <tbody class="font-size-1">
            @foreach($data as $dt)
            <tr>
              <td class="align-middle text-secondary font-weight-normal">{{ $dt->kode_pelatihan }}</td>
              <td class="align-middle text-secondary font-weight-normal">{{ $dt->nama_pelatihan }}</td>
              <td class="align-middle text-secondary font-weight-normal">{{ $dt->link }}</td>
              <td class="align-middle text-secondary font-weight-normal">
                <button class="btn btn-warning btn-sm modalUpdate" data-toggle="modal" data-target="#myModalUpdate"><i class="fa fa-pen" aria-hidden="true"
                nama_pelatihan = "{{ $dt->nama_pelatihan }}"
                link = "{{ $dt->link  }}"
                kode_pelatihan = "{{ $dt->kode_pelatihan }}"></i></button>
                <a href="{{ url('development/destroy').'/'.$dt->kode_pelatihan }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
      <!-- End Pagination -->
      </div>
    </div>
  </div>
    </div>
</div>

@endsection 

<div id="myModalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Jenis Development</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('development/store') }}" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Nama Pelatihan</span>
                        </div>
                        <input type="text" name="nama_pelatihan" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Link</span>
                        </div>
                        <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="myModalUpdate" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Jenis Development</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('development/edit') }}" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Nama Pelatihan</span>
                        </div>
                        <input type="text" name="nama_pelatihan" class="form-control" id="nama_pelatihan" aria-describedby="basic-addon3" value="" placeholder="">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Link</span>
                        </div>
                        <input type="text" name="link" class="form-control" id="link" aria-describedby="basic-addon3" value="" placeholder="">
                        <input type="text" name="kode_pelatihan" hidden>
                      </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Update</button>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>

@push('js') 
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  });

  $(document).on('click', '.modalUpdate', function()
  {
    $nama_pelatihan = $(this).attr('nama_pelatihan');
    $nama = $(this).attr('link');
    $kode_pelatihan = $(this).attr('kode_pelatihan');

    $('input[name=nama_pelatihan]').val($nama_pelatihan);
    $('input[name=link]').val($link);
    $('input[name=kode_pelatihan]').val($kode_pelatihan);

    document.getElementsByName('nama_pelatihan')[0].placeholder='new text for email';
  });
</script>
@endpush