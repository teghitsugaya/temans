@extends('layouts.app') @section('title', 'Activity Log') @section('content')

<div class="container-fluid">
        <div class="header">
           <div class="header-body">
              <div class="row align-items-center">
                 <div class="col ml-md-n2">
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                       Acitvity Log
                    </h6>
                    <!-- Title -->
                    <h1 class="header-title">
                       Data Activity Log User
                    </h1>
                 </div>
                 <div class="col-12 col-md-auto mt-3 mt-md-0">
                    <!-- Avatar group -->
                    <div class="avatar-group">
                       <!--Button Add--->
                    </div>
                 </div>
              </div>
           </div>
        </div>
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
        <div class="row">
           <div class="col-12 col-xl-12">
              <!-- Performance -->
              <div class="card">
                 <div class="card-header">
                    <div class="row align-items-center">
                       <div class="col">
                          <!-- Title -->
                          <h4 class="card-header-title">
                             Tabel Data Acitvity Log
                          </h4>
                       </div>
                    </div>
                    <!-- / .row -->
                 </div>
                 <div class="table-responsive">
                    <table class="table card-table table-nowrap" id="data-table-activity-log" style="width:100%">
                        <thead>
                            <tr>
                                <th class="wd-10p">Diakses</th>
                                <th class="wd-20p">User</th>
                                <th class="wd-25p">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($logs as $key => $row)
                            <tr>
                                <td>
                                    @isset($row->created_at)
                                    {{ $row->created_at }}
                                    @endisset
                                </td>
                                <td>
                                    @isset($row->User->name)
                                    {{ $row->User->name }}
                                    @endisset
                                </td>
                                <td>
                                    @isset($row->description)
                                    {{ $row->description }}
                                    @endisset
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </div>
     </div>

@endsection @push('js')
<script>

</script>
@endpush