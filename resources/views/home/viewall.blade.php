@extends('layouts.app')
@section('title', 'Home')
@section('content')

<!-- Breadcrumb Section -->
<div class="bg-primary">
   <div class="container space-top-1 pb-3">
      <div class="row">
         <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
            <div class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
               <!-- Breadcrumb -->
               <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="../home/index.html">Edit Profile</a></li>
                  <!-- <li class="breadcrumb-item"><a class="breadcrumb-link" href="dashboard.html">Account</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li> -->
               </ol>
               <!-- End Breadcrumb -->
            </div>
         </div>
         <div class="col-lg-7 order-lg-1">
            <!-- User Info -->
            <div class="media d-block d-sm-flex align-items-sm-center">
               <div class="u-lg-avatar position-relative mb-3 mb-sm-0 mr-3">
                  <img class="img-fluid rounded-circle" src="{{asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                  <span class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                  <span class="fas fa-check"></span>
                  </span>
               </div>
               <div class="media-body">
                  <h1 class="h3 text-white font-weight-medium mb-1">{{ Auth::user()->name }}</h1>
                  <span class="d-block text-white font-weight-normal">Project Management Office</span>
                  <span class="d-block text-white f-1">" Lakukan yang terbaik disetiap pekerjaanmu "</span>
                  <span class="d-block text-white f-1">putri@kimiafarma.co.id  |  @putri_r</span>
               </div>
            </div>
            <!-- End User Info -->
         </div>
      </div>
   </div>
</div>
<!-- End Breadcrumb Section -->
<!-- Content Section -->
<div class="bg-light">
   <div class="container space-2">
      <!-- Title -->
      @role('User')
      <div class="d-flex justify-content-between align-items-center mb-3">
         <h3 class="h6 mb-0">Development Program</h3>
      </div>
      <!-- End Title -->
      <!-- Earning Sources -->
      <?php
        $i=1;
      ?>
      @foreach($assessment as $ass)
      @if(($i-1) % 3 == 0 || $i == 1)
      <div class="mb-7">
         <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
      @endif
            <!-- Card -->
            <button class="card card-frame mb-3 detaildata"
                    npp = "{{ $ass->npp }}"
                    id  ="{{ $ass->id_riwayat_assessment }}"
                    link = "{{ $ass->link }}" >
                  <a class="card-body p-4" href="#">
                     <div class="media align-items-center">
                        <div class="u-avatar mr-3">
                           <img class="img-fluid" src="{{asset('assets/img/160x160/doc.png')}}" alt="Image Description">
                        </div>
                        <div class="media-body">
                           <small class="d-block font-weight-medium text-dark">{{ $ass->nama_pelatihan }}</small>
                        </div>
                        <div class="media-body text-right">
                           <span class="text-primary ml-3">
                              @if($ass->status_image == '2' && $ass->status_resume == '2')
                                 <span class="badge badge-success">Done</span>
                              @elseif($ass->status_image == '1' || $ass->status_resume == '1')
                                <span class="badge badge-warning">Pending</span>
                              @else
                                 <span class="badge badge-danger">Not Yet</span>
                              @endif
                           </span>
                        </div>
                     </div>
                  </a>
            </button>
            @if($i % 3 == 0)
               </div>
            </div>
            @endif

            <?php
              $i++;
            ?>
      @endforeach
      @endrole
      <!-- End Earning Sources -->
   </div>
</div>
<!-- End Content Section -->

<div id="modalDetail" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          <span id="nppModal">Detail</span>
        </h4>
      </div>
      <div class="modal-body">
         <a id="link_" href="" class="form-control">Link</a>
         <br/>
         <label><h6>Resume</h6></label>
         <form class="js-focus-state" method="post" action="{{ url('assessment/upload/resume') }}" enctype="multipart/form-data">
          <label class="sr-only" for="subscribeSrEmailExample1">Your file</label>
          {{ csrf_field() }}
          <div class="input-group">
            <input type="file" class="form-control" name="file" id="subscribeSrEmailExample1" placeholder="Your email address" aria-label="Your email address" aria-describedby="subscribeButtonExample2" required>
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Upload</button>
            </div>
          </div>
          <input hidden="" id="id_riwayat" name="id_riwayat" value="">
        </form>
        <br/>
        <label><h6>Image</h6></label>
         <form class="js-focus-state" method="post" action="{{ url('assessment/upload/image') }}" enctype="multipart/form-data">
          <label class="sr-only" for="subscribeSrEmailExample1">Your file</label>
          {{ csrf_field() }}
          <div class="input-group">
            <input type="file" class="form-control" name="file" id="subscribeSrEmailExample1" placeholder="Your email address" aria-label="Your email address" aria-describedby="subscribeButtonExample2" required>
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Upload</button>
            </div>
          </div>
          <input hidden="" id="id_riwayat" name="id_riwayat" value="">
        </form>
         <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
        
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<script>
   $(document).on('click', '.detaildata', function(){
      $('#modalDetail').modal();
      $npp = $(this).attr('npp');
      $id = $(this).attr('id');
      $link = $(this).attr('link');
      $('input[name=id_riwayat]').val($id);
      $("#link_").attr("href", $link);
   });
</script>
@endpush