@extends('layouts.app')
@section('title', 'Role Permission')
@section('content')

<div class="bg-light">
   <div class="container space-2">
         <div class="row">
               <div class="col-md-4">
                     <h5>Tambah Permission Baru</h5>
                     <form action="{{ url('users/add-ermission') }}" method="post">
                        @csrf
                        <div class="form-group">
                           <label for="">Name</label>
                           <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" required>
                           <p class="text-danger">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="form-group">
                              <button class="btn btn-primary"><span class="fe fe-save"></span> Simpan</button>
                        </div>
                     </form>
               </div>
               ​
               <div class="col-md-4">
         
                     @if (session('success')) @alert(['type' => 'success']) {{ session('success') }} @endalert @endif
                     <h5>Set Role Permission Baru</h5>
                     <form action="{{ url('users/role-permission') }}" method="GET">
                        <div class="form-group">
                           <label for="">Roles</label>
                           <div class="form-group">
                                 <select name="role" class="custom-select">
                                    @foreach ($roles as $value)
                                    <option value="{{ $value }}" {{ request()->get('role') == $value ? 'selected':'' }}>{{ $value }}</option>
                                    @endforeach
                                 </select>
                           </div>
                           <div class="form-group">
                                 <button class="btn btn-primary"><span class="fe fe-check"></span> Check</button>
                           </div>
                        </div>
                     </form>
         
                     {{-- jika $permission tidak bernilai kosong --}} @if (!empty($permissions))
                     <form action="{{ url('users/permission', request()->get('role')) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                           <div class="nav-tabs-custom">
                                 <ul class="nav nav-tabs">
                                    <li class="active">
                                       <a href="#tab_1" data-toggle="tab">Permissions</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                       @php $no = 1; @endphp @foreach ($permissions as $key => $row)
                                       <input type="checkbox" name="permission[]" class="minimal-red" value="{{ $row }}" 
                                       {{-- CHECK, JIKA PERMISSION TERSEBUT SUDAH DI SET, MAKA CHECKED --}} 
                                       {{ in_array($row, $hasPermission) ? 'checked': '' }}> {{ $row }}
                                       <br> @if ($no++%4 == 0)
                                       <br> @endif @endforeach
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <button class="btn btn-primary"><span class="fe fe-lock"></span> Set Permission</button>
                     </form>
                     @endif
               </div>
            </div>
   </div>
</div>

@endsection 
@push('js')
<script></script>
@endpush