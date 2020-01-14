@extends('layouts.app') @section('title', 'Lihat Data User') @section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Menu @yield('title')</h3>
        <h6 class="card-subtitle text-muted">Berikut ini adalah detail dari @yield('title').</h6>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-3">
                <dt>E-Mail Address</dt>
                <dd>{{ $user->email }}</dd>
            </div>
            <div class="form-group col-md-3">
                <dt>Nama User</dt>
                <dd>{{ $user->name }}</dd>
            </div>
        </div>
        <div class="form-group">
            <a href="{{ url('users') }}" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>

<!-- MODAL -->
<div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data Upload</h4>
      </div>
      <div class="modal-body">
         <form method = "POST" enctype="multipart/form-data" action="import/excel">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="file">Upload file excel</label>
                  <input type="file" class="form-control-file" name="file" id="file" placeholder="">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

   </div>
</div>
<!-- ENDMODAL -->

@endsection 
@push('js') @endpush