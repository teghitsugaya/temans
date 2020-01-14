@extends('layouts.app') @section('title', 'Performance') @section('content')

<div class="card">
    <div class="card-body">
      <!-- Search -->
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
            <a href="{{ url('performance/export') }}" class="btn btn-success">Download</a>
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
                  Tahun Kinerja
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
                  Nilai Kinerja
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Kategori
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
              <td class="align-middle">{{ $dt->tahun_kinerja }}</td>
              <td class="align-middle">{{ $dt->jabatan }}</td>
              <td class="align-middle">{{ $dt->nilai_kinerja }}</td>
              <td class="align-middle">{{ $dt->kategori }}</td>
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
        <h4 class="modal-title">Upload Data Excel</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('performance/import') }}" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <label>Pilih file excel</label>
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

@endsection 
@push('js') 
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endpush