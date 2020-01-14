@extends('layouts.app') @section('title', 'Development') @section('content')

<div class="card">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="card-header">
        <h3 class="card-title">Menu @yield('title')</h3>
        <h6 class="card-subtitle text-muted">Berikut ini adalah detail dari @yield('title').</h6>
        <div style="text-align: right;">
            <a href="{{ url('development/show') }}" class="btn btn-primary">Tambah Development</a>
            <a href="{{ url('run/python/image') }}" class="btn btn-secondary">Auto Approve</a>
        </div>
    </div>
 
    {{-- notifikasi sukses --}}
    @if ($sukses = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $sukses }}</strong>
    </div>
    @endif

    @if ($error = Session::get('error'))
    <div class="alert alert-warning alert-block">
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
                  Nama Pelatihan
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Status Image
                  <div class="ml-2">
                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                  </div>
                </div>
              </th>
              <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                  Status Resume
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
                  Download
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
              <td class="align-middle">{{ $dt->nama_pelatihan }}</td>
              @if($dt->status_image == 2)
                <td class="align-middle">Done</td>
              @elseif($dt->status_image == 1)
                <td class="align-middle">Pending</td>
              @else
                <td class="align-middle">Not Yet</td>
              @endif

              @if($dt->status_resume == 2)
                <td class="align-middle">Done</td>
              @elseif($dt->status_resume == 1)
                <td class="align-middle">Pending</td>
              @else
                <td class="align-middle">Not Yet</td>
              @endif
                <td class="align-middle">
                <a href="{{ url('development/approve').'/'.$dt->id_riwayat_assessment }}" class="btn btn-primary btn-sm">Approve</a>
                <a href="{{ url('development/disapprove').'/'.$dt->id_riwayat_assessment }}" class="btn btn-secondary btn-sm">Dispprove</a>
                </td>
                <td class="align-middle">
                <a href="{{ url('development/downloadimage').'/'.$dt->id_riwayat_assessment }}" class="btn btn-primary btn-sm">
                  <i class="fas fa-image" aria-hidden="true"></i>
                </a>
                <a href="{{ url('development/downloadresume').'/'.$dt->id_riwayat_assessment }}" class="btn btn-primary btn-sm">
                  <i class="fas fa-file-word" aria-hidden="true"></i>
                </a>
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
@push('js') 
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endpush