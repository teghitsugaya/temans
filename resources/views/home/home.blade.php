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
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ url('curriculum-vitae/edit', Crypt::encryptString($curriculumVitae->id)) }}">Edit Profile</a></li>
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
                  <img class="img-fluid rounded-circle" src="{{ asset('data_profile')}}/{{ $curriculumVitae->file_foto }}" alt="Image Description">
                  <span class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                  <span class="fas fa-check"></span>
                  </span>
               </div>
               <div class="media-body">
                  <h1 class="h3 text-white font-weight-medium mb-1">{{ Auth::user()->name }}</h1>
                  <span class="d-block text-white font-weight-normal">{{ $curriculumVitae->jabatan_terakhir }}</span>
                  <span class="d-block text-white f-1">{{ $curriculumVitae->email }}</span>
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
      <!-- Stats -->
      <div class="card-deck d-block d-lg-flex card-lg-gutters-3 mb-6">
         <!-- Card -->
         <!-- <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
               <div class="media align-items-center">
                  <span class="btn btn-lg btn-icon btn-soft-primary rounded-circle mr-4">
                  <span class="fas fa-address-card btn-icon__inner"></span>
                  </span>
                  <div class="media-body">
                     <span class="d-block font-size-3">CV</span>
                     <h2 class="h6 text-secondary font-weight-normal mb-0">Curriculum Vitae</h2>
                  </div>
               </div>
            </div>
         </div> -->

         <div class="col-md-3 col-lg-4">
            <!-- Stats -->
            <div class="bg-primary shadow-primary-lg rounded pt-6 pb-5 px-6">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 text-white mb-0">Curriculum Vitae</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="referralsSettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-light btn-bg-transparent" href="javascript:;" role="button" aria-controls="referralsSettingsDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#referralsSettingsDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="referralsSettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="referralsSettingsDropdownInvoker" style="min-width: 190px; animation-duration: 300ms;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-eye dropdown-item-icon"></small>
                      Lihat CV
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-pen dropdown-item-icon"></small>
                      Update CV
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="opacity-md mt-1 mb-1">

              <!-- Referral Info -->
              <div class="py-2">
                <div class="row">
                  <div class="col-6">
                    <div class="mb-0">
                      <span class="d-block text-white-70 font-size-1 mb-2">Informasi mengenai CV:</span>
                  
                      
                   
                      <span class="far text-white fa-address-card fa-4x "></span>
                      </span> 
                      <!-- <span class="align-top text-white">$</span> -->
                      <!-- <span class="text-white font-size-3 font-weight-large text-lh-sm">C V</span> -->
                    </div>
                    <!-- <span class="text-white-70 font-size-1">Update </span> -->
                    
                  </div>

                  <div class="col-6 align-self-end">
                    <!-- Pie Circle -->
                    <div class="js-pie text-center" data-circles-text-class="content-centered-y" data-circles-value=54 data-circles-max-value="100" data-circles-bg-color="rgba(255, 255, 255, 0.1)" data-circles-fg-color="#ffffff" data-circles-radius="50" data-circles-stroke-width="4" data-circles-duration="2000" data-circles-scroll-animate="true" data-circles-color="#ffffff" data-circles-font-size="24" id="hs-pie-1"><div class="u-circles-wrap" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"><path fill="transparent" stroke="rgba(255, 255, 255, 0.1)" stroke-width="4" d="M 49.990223686222635 2.000000995586582 A 48 48 0 1 1 49.93332896297256 2.0000463023887676 Z" class="u-circles-maxValueStroke"></path><path fill="transparent" stroke="#ffffff" stroke-width="4" d="M 49.990223686222635 2.000000995586582 A 48 48 0 1 1 38.11513781023752 96.5053765787393 " class="u-circles-valueStroke"></path></svg><div class="content-centered-y" style="position: absolute; text-align: center; width: 100%; font-size: 24px; height: auto; line-height: normal; color: rgb(255, 255, 255);">54</div></div></div>
                    <!-- End Pie Circle -->
                  </div>
                </div>
              </div>
              <!-- End Referral Info -->
            </div>
            <!-- End Stats -->
          </div>
         <!-- End Card -->
         <!-- Card -->
         <!-- <a href="{{ url('performance') }}">
         <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
               <div class="media align-items-center">
                  <span class="btn btn-lg btn-icon btn-soft-success rounded-circle mr-4">
                  <span class="fas fa-chart-line btn-icon__inner"></span>
                  </span>
                  <div class="media-body">
                     <span class="d-block font-size-3" style="color: black;">PMS</span>
                     <h3 class="h6 text-secondary font-weight-normal mb-0">Personal Performance </h3>
                  </div>
               </div>
            </div>
         </div> -->
         <div class="card text-center mb-5">
            <div class="card-body p-4">
              <!-- Team -->
              <div class="mb-0">
                <div class="position-relative u-lg-avatar mx-auto mb-0">
                  <img class="img-fluid" src="../../assets/img/100x100/img13.jpg" alt="Image Description">
                  <!-- <span class="badge badge-xs badge-outline-primary badge-pos badge-pos--bottom-left rounded-circle"></span> -->
                </div>

                <a class="btn btn-sm btn-icon btn-soft-warning btn-bg-transparent position-absolute top-0 right-0 rounded-circle m-3" href="javascript:;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download PMS">
                  <span class="fas fa-arrow-circle-down btn-icon__inner"></span>
                </a>

                <h2 class="h6 mb-0">
                  <a href="#">Personal Performance</a>
                </h2>
                <!-- <a class="small" href="#">@patrickgarner</a> -->
              </div>
              <!-- End Team -->

             
            </div>

            <div class="card-footer py-4 px-6">
              <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="#">
                
                SuccessFactors
                <span class="far fa-heart mr-2"></span>
              </a>
            </div>
          </div>
         </a>
         <!-- End Card -->
         <!-- Card -->
         <!-- <a href="{{ url('assessment') }}">
         <div class="card">
            <div class="card-body p-5">
               <div class="media align-items-center">
                  <span class="btn btn-lg btn-icon btn-soft-warning rounded-circle mr-4">
                  <span class="fas fa-file-alt btn-icon__inner"></span>
                  </span>
                  <div class="media-body">
                     <span class="d-block font-size-3" style="color: black;">Assessment</span>
                     <h3 class="h6 text-secondary font-weight-normal mb-0">Assessment Result</h3>
                  </div>
               </div>
            </div>
         </div>
         </a> -->
         <div class="card text-center mb-5">
            <div class="card-body p-4">
              <!-- Team -->
              <div class="mb-0">
                <div class="position-relative u-lg-avatar mx-auto mb-0">
                  <img class="img-fluid" src="../../assets/img/100x100/img15s.png" alt="Image Description">
                  <!-- <span class="badge badge-xs badge-outline-primary badge-pos badge-pos--bottom-left rounded-circle"></span> -->
                </div>

                <a class="btn btn-sm btn-icon btn-soft-warning btn-bg-transparent position-absolute top-0 right-0 rounded-circle m-3" href="javascript:;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download Assessment">
                  <span class="fas fa-arrow-circle-down btn-icon__inner"></span>
                </a>

                <h2 class="h6 mb-0">
                  <a href="#">Assessment Result</a>
                </h2>
                <!-- <a class="small" href="#">@patrickgarner</a> -->
              </div>
              <!-- End Team -->

             
            </div>

            <div class="card-footer py-4 px-6">
              <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="#">
                
                Lihat Hasil
                <!-- <span class="far fa-heart mr-2"></span> -->
              </a>
            </div>
          </div>
         </a>
         <!-- End Card -->
         <!-- End Card -->
      </div>
      <!-- End Stats -->
      <!-- Title -->
      @role('User')
      <div class="d-flex justify-content-between align-items-center mb-3">
         <h3 class="h6 mb-0">Development Program</h3>
         <a class="link-muted" href="{{ url('home/viewall') }}">View All</a>
      </div>
      <!-- End Title -->
      <!-- Earning Sources -->
      <div class="mb-7">
         <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
            <!-- Card -->
            @foreach($assessment as $ass)
            <button class="card card-frame mb-3 detaildata"
                    npp = "{{ $ass->npp }}"
                    id  ="{{ $ass->id_riwayat_assessment }}"
                    link = "{{ $ass->link }}" >
                  <a class="card-body p-4" href="#">
                     <div class="media align-items-center">
                        <div class="u-avatar mr-3">
                           <img class="img-fluid" src="assets/img/160x160/doc.png" alt="Image Description">
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
            @endforeach
            <!-- End Card -->
         </div>
      </div>
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
         <a id="link_" href="" class="form-control" target="_blank">Klik di sini untuk mengakses <b>e-learning</b></a>
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
      $namelink = 'https://'+$link
      $('input[name=id_riwayat]').val($id);
      $("#link_").attr("href",$namelink);
   });
</script>
@endpush