@extends('layouts.app') @section('title', 'User') @section('content')

<div class="bg-light">
   <div class="container space-2">
      <div class="card">
         <div class="card-header py-4 px-0 mx-4">
            <div class="row justify-content-sm-between align-items-sm-center">
                  <div class="col-md-8 mb-2 mb-md-0">
                        <!-- Search -->
                        <div class="js-focus-state input-group input-group-sm">
                           <div class="input-group-prepend">
                           <span class="input-group-text">
                              <span class="fas fa-search"></span>
                           </span>
                           </div>
                           <input id="datatableSearch" class="form-control" type="email" placeholder="Search activities" aria-label="Search activities">
                        </div>
                        <!-- End Search -->
                  </div>
                  <div class="col-md-4 mb-2 mb-md-0">
                     <a class="btn btn-sm btn-soft-primary text-nowrap transition-3d-hover form-control float-right" href="{{ url('users/create') }}">
                        <span class="fas fa-plus small mr-2"></span>
                        Tambah Data User
                     </a>
                  </div>
            </div>
         </div>

         <div class="card-body p-4">
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
            <div class="table-responsive-md u-datatable">
               <table class="js-datatable table table-borderless u-datatable__striped u-datatable__content u-datatable__trigger mb-5"
                        data-dt-info="#datatableWithPaginationInfo"
                        data-dt-search="#datatableSearch"
                        data-dt-page-length="25"
                        data-dt-is-show-paging="true"
               
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
                                 Nama Lengkap
                                 <div class="ml-2">
                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                 </div>
                           </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                           <div class="d-flex justify-content-between align-items-center">
                                 Email
                                 <div class="ml-2">
                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                 </div>
                           </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                           <div class="d-flex justify-content-between align-items-center">
                                 Role
                                 <div class="ml-2">
                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                 </div>
                           </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                           <div class="d-flex justify-content-between align-items-center">
                                 Status
                                 <div class="ml-2">
                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                 </div>
                           </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                           <div class="d-flex justify-content-between align-items-center">
                                 Aksi
                                 <div class="ml-2">
                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                 </div>
                           </div>
                        </th>
                     </tr>
                  </thead>
                  <tbody class="font-size-1">
                     @forelse ($users as $row)
                     <tr>
                        <td class="align-middle">{{ $row->name }}</td>
                        <td class="align-middle">{{ $row->email }}</td>
                        <td class="align-middle">
                           @foreach ($row->getRoleNames() as $role)
                           <lable class="badge badge-warning">{{ $role }}</lable>
                           @endforeach
                        </td>
                        <td class="align-middle">
                           @if ($row->status)
                           <label class="badge badge-success">Aktif</label>
                           @else
                           <label for="" class="badge badge-default">Suspend</label>
                           @endif
                        </td>
                        <td class="align-middle text-secondary">
                           <form action="{{ url('users', Crypt::encryptString($row->id)) }}" method="POST">
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <a class="btn btn-xs btn-icon btn-soft-secondary transition-3d-hover" href="{{ url('users/roles', Crypt::encryptString($row->id)) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                 <span class="fas fa-lock btn-icon__inner"></span>
                              </a>
                              <a class="btn btn-xs btn-icon btn-soft-secondary transition-3d-hover" href="{{ url('users/edit', Crypt::encryptString($row->id)) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                 <span class="fas fa-pen btn-icon__inner"></span>
                              </a>
                              <button type="submit" class="btn btn-xs btn-icon btn-soft-secondary transition-3d-hover"><span class="fas fa-trash btn-icon__inner"></span></button>
                           </form>
                        </td>
                     </tr>
                     @empty
                     <tr>
                        <td colspan="4" class="text-center">Tidak ada data</td>
                     </tr>
                     @endforelse               
                    </tbody>
               </table>
            </div>
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

@endsection

@push('js')
<script>

</script>
@endpush