@extends('layouts.app') @section('title', 'User') @section('content')

    <!-- Breadcrumb Section -->
    <div class="bg-primary">
      <div class="container space-1">
        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
          <div class="mb-3 mb-sm-0">
            <!-- Breadcrumb -->
            <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="home/index.html">Home</a></li>
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="dashboard.html">Account</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
            <!-- End Breadcrumb -->
          </div>

          <!-- Edit Profile -->
          <a class="btn btn-sm btn-soft-white transition-3d-hover" href="edit-profile.html">
            <span class="fas fa-user-cog small mr-2"></span>
            Edit Profile
          </a>
          <!-- End Edit Profile -->
        </div>

      </div>
    </div>
    <!-- End Breadcrumb Section -->

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-2">
        <div class="row">
          <div class="col-lg-3 mb-7 mb-lg-0">
            <!-- Profile Card -->
            <div class="card p-1 mb-4">
              <div class="card-body text-center">
                <div class="mb-3">
                  <img class="u-lg-avatar rounded-circle" src="{{ asset('assets/img/160x160/img3.jpg') }}" alt="Image Description">
                </div>

                <div class="mb-3">
                  <h1 class="h6 font-weight-medium mb-0">{{ $curriculumVitae->User->name }}</h1>
                  <small class="d-block text-muted">{{ $curriculumVitae->jabatan_terakhir}}</small>
                </div>

                <div class="mb-2">
                  <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="#">
                    <span class="far fa-envelope mr-2"></span>
                    Send a Message
                  </a>
                </div>

                <a class="text-secondary small" href="#">
                  <i class="far fa-flag mr-1"></i> Report this user
                </a>
              </div>
            </div>
            <!-- End Profile Card -->

            <!-- Contacts  -->
            <div class="card mb-4">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
                <h2 class="h6 mb-0">Badge</h2>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- User -->
                <a class="d-flex align-items-start mb-4" href="#">
                  <div class="position-relative u-avatar">
                    <img class="img-fluid rounded-circle" src="assets/img/100x100/img9.jpg" alt="Image Description">
                    <span class="badge badge-xs badge-outline-success badge-pos badge-pos--bottom-right rounded-circle"></span>
                  </div>

                  <div class="ml-3">
                    <span class="d-block text-dark">Patrick Garner</span>
                    <small class="d-block text-secondary">Web Developer</small>
                  </div>
                </a>
                <!-- End User -->

                <!-- User -->
                <a class="d-flex align-items-start mb-4" href="#">
                  <span class="btn btn-icon btn-soft-danger rounded-circle">
                    <span class="btn-icon__inner">AO</span>
                    <span class="badge badge-xs badge-outline-warning badge-pos badge-pos--bottom-right rounded-circle"></span>
                  </span>

                  <div class="ml-3">
                    <span class="d-block text-dark">Amanta Owens</span>
                    <small class="d-block text-secondary">UI/UX Designer</small>
                  </div>
                </a>
                <!-- End User -->

                <!-- User -->
                <a class="d-flex align-items-start mb-4" href="#">
                  <div class="position-relative u-avatar">
                    <img class="img-fluid rounded-circle" src="assets/img/100x100/img3.jpg" alt="Image Description">
                    <span class="badge badge-xs badge-outline-warning badge-pos badge-pos--bottom-right rounded-circle"></span>
                  </div>

                  <div class="ml-3">
                    <span class="d-block text-dark">Eliza Donovan</span>
                    <small class="d-block text-secondary">Project Manager</small>
                  </div>
                </a>
                <!-- End User -->

                <!-- User -->
                <a class="d-flex align-items-start" href="#">
                  <span class="btn btn-icon btn-soft-success rounded-circle">
                    <span class="btn-icon__inner">JC</span>
                    <span class="badge badge-xs badge-outline-success badge-pos badge-pos--bottom-right rounded-circle"></span>
                  </span>

                  <div class="ml-3">
                    <span class="d-block text-dark">James Collins</span>
                    <small class="d-block text-secondary">Angular Developer</small>
                  </div>
                </a>
                <!-- End User -->
              </div>
            </div>
            <!-- End Contacts  -->

            <!-- Social Profiles -->
            <div class="card mb-4">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
                <h3 class="h6 mb-0">Social Profiles</h3>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- Social Profiles -->
                <a class="media mb-4" href="#">
                  <div class="u-sm-avatar mr-3">
                    <img class="img-fluid" src="assets/img/160x160/img18.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="d-block text-dark">Behance</span>
                    <small class="d-block text-secondary">1.2k followers</small>
                  </div>
                </a>
                <!-- End Social Profiles -->

                <!-- Social Profiles -->
                <a class="media mb-4" href="#">
                  <div class="u-sm-avatar mr-3">
                    <img class="img-fluid" src="assets/img/160x160/img21.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="d-block text-dark">Dribbble</span>
                    <small class="d-block text-secondary">4.5k followers</small>
                  </div>
                </a>
                <!-- End Social Profiles -->

                <!-- Social Profiles -->
                <a class="media mb-4" href="#">
                  <div class="u-sm-avatar mr-3">
                    <img class="img-fluid" src="assets/img/160x160/img19.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="d-block text-dark">Twitter</span>
                    <small class="d-block text-secondary">2.7k followers</small>
                  </div>
                </a>
                <!-- End Social Profiles -->

                <!-- Social Profiles -->
                <a class="media" href="#">
                  <div class="u-sm-avatar mr-3">
                    <img class="img-fluid" src="assets/img/160x160/img20.png" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="d-block text-dark">Facebook</span>
                    <small class="d-block text-secondary">3k followers</small>
                  </div>
                </a>
                <!-- End Social Profiles -->
              </div>
            </div>
            <!-- End Social Profiles -->
          </div>

          <div class="col-lg-9">
            <!-- User Details -->
            <div class="mb-4">
              <h2 class="h4">Hey, {{ $curriculumVitae->User->name }} <span class="badge badge-success ml-1">Newbie</span></h2>
              <h4 class="h6 text-secondary mb-0">Kimia Farma Holding<small> - Last Edited in July 2017</small></h4>
            </div>
            <!-- End User Details -->

            <!-- Info -->
            <div class="mb-4">
              <p>{{ $curriculumVitae->biografi }}</p>
            </div>
            <!-- End Info -->

            <!-- Collections -->
            <ul class="list-inline d-flex align-items-center">
              <li class="list-inline-item mb-3 mb-sm-0 mr-5">
                <div class="d-flex align-items-center">
                  <span class="bg-warning text-white font-weight-medium rounded py-2 px-3 mr-2">5</span>
                  <div class="text-secondary">
                    Reviews
                  </div>
                </div>
              </li>
              <li class="list-inline-item mb-3 mb-sm-0 mr-5">
                <div class="d-flex align-items-center">
                  <img class="mr-2" src="assets/svg/illustrations/referral.svg" alt="Image Description" style="width: 40px;">
                  <div class="text-secondary">
                    Done 10 Course
                  </div>
                </div>
              </li>
              <li class="list-inline-item mb-3 mb-sm-0">
                <div class="d-flex align-items-center">
                  <img class="mr-2" src="assets/svg/illustrations/verified-user.svg" alt="Image Description" style="width: 40px;">
                  <div class="text-secondary">
                    Verified
                  </div>
                </div>
              </li>
            </ul>
            <!-- End Collections -->

            <hr class="my-5">

          <!-- Biografi -->
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-envelope list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Email :</span>
                        <a href="#">{{ $curriculumVitae->email }}</a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-link list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Gelar Akademik :</span>
                        <span class="d-block text-muted">{{ $curriculumVitae->gelar_akademik }}</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fab fa-instagram list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Sosial Media :</span>
                        <a href="#">{{ $curriculumVitae->sosial_media }}</a>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- End List Group -->
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-birthday-cake list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Tempat, Tanggal Lahir :</span>
                        <span class="d-block text-muted">{{ $curriculumVitae->tempat_lahir }}, {{ $curriculumVitae->tanggal_lahir }}</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-venus-mars list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Jenis Kelamin :</span>
                        <span class="d-block text-muted">{{ $curriculumVitae->jenis_kelamin }}</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-praying-hands list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Agama :</span>
                        <span class="d-block text-muted">{{ $curriculumVitae->agama }}</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- End List Group -->
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-map-marker-alt list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Alamat :</span>
                        <span class="d-block text-muted">{{ $curriculumVitae->alamat_rumah }}</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-phone list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Nomor Handphone :</span>
                        <span class="d-block text-muted">{{ $curriculumVitae->handphone }}</span>
                      </div>
                    </div>
                  </li>

                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-tags list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">NIK :</span>
                        <span class="d-block text-muted">{{ $curriculumVitae->nik }}</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- End List Group -->
              </div>
            </div>
            <!-- End Icon Blocks -->

            <hr class="my-4">

          <!-- Summary -->
            <div class="row mb-5">
              <div class="col mb-5 mb-md-0">
                <!-- Title -->
                <div class="mb-3">
                  <h2 class="h4 mb-0">Summary</h2>
                  <small class="d-block text-secondary">Menggambarkan keahlian/kompetensi, value pribadi, & visi pribadi</small></h4>
                </div>
                <!-- End Title -->

                <!-- Info -->
                <div class="d-flex mb-5">
                  <img class="u-avatar align-self-center mr-4" src="assets/img/icon/skill.png" alt="Image Description">
                  <div>
                     <h4 class="h6 font-weight-semi-bold mb-1">Keahlian/kompetensi yang dikuasai :</h4>
                     <p class="mb-0">{{$curriculumVitae->Summary->first()->keahlian}}</p>
                  </div>
                </div>

                <div class="d-flex mb-5">
                  <img class="u-avatar align-self-center mr-4" src="assets/img/icon/value.png" alt="Image Description">
                  <div>
                     <h4 class="h6 font-weight-semi-bold mb-1">Value Pribadi :</h4>
                     <p class="mb-0">{{$curriculumVitae->Summary->first()->value}}</p>
                  </div>
                </div>

                <div class="d-flex mb-1">
                  <img class="u-avatar align-self-center mr-4" src="assets/img/icon/visi.png" alt="Image Description">
                  <div>
                     <h4 class="h6 font-weight-semi-bold mb-1">Visi Pribadi :</h4>
                     <p class="mb-0">{{$curriculumVitae->Summary->first()->visi}}</p>
                  </div>
                </div>

                <!-- End Info -->
              </div>

            </div>
            <!-- End Info -->

            <hr class="my-4">
          <!-- Interest -->
            <div class="row mb-3">
              <div class="col mb-4 mb-md-0">
                <!-- Title -->
                <div class="mb-3">
                  <h2 class="h4 mb-0">Interest</h2>
                  <small class="d-block text-secondary">Ilustrasi atas minat/passion yang secara terus-menerus dikembangkan</small></h4>
                </div>
                <!-- End Title -->

                <!-- Info -->
                <div class="d-flex mb-2">
                @foreach ($curriculumVitae->Interest as $row)   
                        <span class="badge badge-pill badge-warning badge-bigger mr-2">{{$row->KategoriInterest->nama}}</span>
               @endforeach    
                </div>
                <!-- End Info -->
              </div>
            </div>

            <hr class="my-4">
          <!-- Peminatan Posisi Direktur -->
            <div class="row mb-3">
              <div class="col mb-7 mb-md-0">
                <!-- Title -->
                <div class="mb-3">
                  <h2 class="h4 mb-0">Peminatan Posisi Direktur</h2>
                  
                  <!-- <small class="d-block text-secondary">Ilustrasi atas minat/passion yang secara terus-menerus dikembangkan</small></h4> -->
                </div>
                <!-- End Title -->

                <!-- Info -->
                <div class="d-flex mb-2">
                @foreach ($curriculumVitae->PeminatanPosisiDirektur as $row)   
                        <span class="badge badge-pill badge-secondary badge-bigger mr-2">{{$row->MasterPeminatanPosisiDirektur->peminatan}}</span>
               @endforeach    
                </div>
                <!-- End Info -->
              </div>
            </div>
          
            <hr class="my-4">
          <!-- Riwayat Jabatan -->
            <div class="mb-3">
            <h2 class="h4 mb-0">Riwayat Jabatan</h2>
            <small class="d-block text-primary">1. Jabatan/Pekerjaan yang Pernah/Sedang Diemban</small></h4>
            </div>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Jabatan</th>
                     <th scope="col">Instansi</th>
                     <th scope="col">Awal Menjabat</th>
                     <th scope="col">Akhir Menjabat</th>
                     <th scope="col">Tupoksi</th>
                     <th scope="col">Achievement</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
               @foreach($curriculumVitae->RiwayatJabatan as $key => $row)
               @if($row->penugasan_komisaris == 'Tidak')
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->jabatan}}</span>
                     </div>
                     </td>
                     <td class="align-middle text-secondary">{{$row->instansi}}</td>
                     <td class="align-middle text-secondary">{{$row->awal_menjabat}}</td>
                     <td class="align-middle text-secondary">{{$row->akhir_menjabat}}</td>
                     <td class="align-middle text-secondary">{{$row->tupoksi}}</td>
                     <td class="align-middle text-secondary">{{$row->achievement}}</td>
                     
                  </tr>
                  @endif
                  @endforeach
     
               </tbody>

               
            </table>
            <small class="d-block text-primary">2. Penugasan yang berkaitan dengan Dewan Komisaris/Dewan Pengawas (bila ada)</small></h4>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Jabatan</th>
                     <th scope="col">Instansi</th>
                     <th scope="col">Awal Menjabat</th>
                     <th scope="col">Akhir Menjabat</th>
                     <th scope="col">Tupoksi</th>
                    
                  </tr>
               </thead>
               <tbody>
                  @php 
                    $num=0
                  @endphp
                 
                  @forelse ($curriculumVitae->RiwayatJabatan as $key => $row)
                 
                  @if($row->penugasan_komisaris == 'Ya')
                  <tr>
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->jabatan}}</span>
                     </div>
                     </td>
                     <td class="align-middle text-secondary">{{$row->instansi}}</td>
                     <td class="align-middle text-secondary">{{$row->awal_menjabat}}</td>
                     <td class="align-middle text-secondary">{{$row->akhir_menjabat}}</td>
                     <td class="align-middle text-secondary">{{$row->tupoksi}}</td>
                  
                     
                  </tr>
                  @endif
                  
                  @empty
                     <tr>
                        <td colspan="4" class="text-center">Tidak ada data</td>
                     </tr>
                     @endforelse   
               </tbody>
            </table>

            <hr class="my-4">
          <!-- Keanggotaan Organisasi -->
            <div class="mb-3">
            <h2 class="h4 mb-0">Keanggotan Organisasi Profesi/Komunitas yang Diikuti</h2>
            <small class="d-block text-primary">1. Kegiatan/Organisasi yang Pernah/Sedang Diikuti (yang terkait dengan pekerjaan/profesional)</small></h4>
            </div>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Nama Kegiatan</th>
                     <th scope="col">Jabatan</th>
                     <th scope="col">Rentang Waktu</th>
                     <th scope="col">Uraian Singkat</th>
                     <th scope="col">Profesi</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
               @foreach($curriculumVitae->KeanggotaanOrganisasi as $key => $row)
               @if($row->non_formal == 'Tidak')
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->nama_kegiatan}}</span>
                     </div>
                     </td>
                     <td class="align-middle text-secondary">{{$row->jabatan}}</td>
                     <td class="align-middle text-secondary">{{$row->rentang_waktu}}</td>
                     <td class="align-middle text-secondary">{{$row->uraian_singkat}}</td>
                     <td class="align-middle text-secondary">{{$row->profesi}}</td>
                    
   
                  </tr>
                  @endif
                  @endforeach
     
               </tbody>
               
            </table>
            <small class="d-block text-primary">2. Kegiatan/Organisasi yang Pernah/Sedang Diikuti (non formal)</small></h4>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Nama Kegiatan</th>
                     <th scope="col">Jabatan</th>
                     <th scope="col">Rentang Waktu</th>
                     <th scope="col">Uraian Singkat</th>
                     <th scope="col">Profesi</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
               @foreach($curriculumVitae->KeanggotaanOrganisasi as $key => $row)
               @if($row->non_formal == 'Ya')
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->nama_kegiatan}}</span>
                     </div>
                     </td>
                     <td class="align-middle text-secondary">{{$row->jabatan}}</td>
                     <td class="align-middle text-secondary">{{$row->rentang_waktu}}</td>
                     <td class="align-middle text-secondary">{{$row->uraian_singkat}}</td>
                     <td class="align-middle text-secondary">{{$row->profesi}}</td>
                    
   
                  </tr>
                  @endif
                  @endforeach
     
               </tbody>
               
            </table>

          <!-- Penghargaan -->
            <hr class="my-5">

            <div class="row mb-3">
              <div class="col mb-7 mb-md-0">
                <!-- Title -->
                <div class="mb-3">
                  <h2 class="h4 mb-0">Penghargaan</h2>
                </div>
                <!-- End Title -->
                @foreach($curriculumVitae->Penghargaan as $key => $row)
                <!-- Info -->
                <div class="d-flex mb-3">
                  <img class="u-avatar align-self-center mr-4" src="assets/img/icon/medal.png" alt="Image Description">
                  <div>
                    <small class="d-block text-secondary">{{$row->tahun}} - {{$row->tingkat}}</small>
                    <h4 class="h6 mb-0">{{$row->jenis_penghargaan}}</h4>
                    <span class="d-block text-secondary">{{$row->diberikan_oleh}}</span>
                  </div>
                </div>
                <!-- End Info -->

                @endforeach
              </div>

            
            </div>

            <hr class="my-4">
          <!-- Riwayat Pendidikan -->
            <div class="mb-3">
            <h2 class="h4 mb-0">Riwayat Pendidikan dan Pelatihan</h2>
            <small class="d-block text-primary">1. Pendidikan Formal</small></h4>
            </div>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Jenjang</th>
                     <th scope="col">Jurusan</th>
                     <th scope="col">Tahun Lulus</th>
                     <th scope="col">Perguruan Tinggi</th>
                     <th scope="col">Kota</th>
                     <th scope="col">Penghargaan</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
               @foreach($curriculumVitae->RiwayatPendidikanFormal as $key => $row)
              
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->jenjang}}</span>
                     </div>
                     </td>
                     <td class="align-middle text-secondary">{{$row->jurusan}}</td>
                     <td class="align-middle text-secondary">{{$row->tahun_lulus}}</td>
                     <td class="align-middle text-secondary">{{$row->perguruan_tinggi}}</td>
                     <td class="align-middle text-secondary">{{$row->kota}}</td>
                     <td class="align-middle text-secondary">{{$row->penghargaan}}</td>
                    
   
                  </tr>
                 
                  @endforeach
     
               </tbody>
               
            </table>
            <small class="d-block text-primary mb-3">2. Pendidikan dan Latihan/Pengembangan Kompetensi yang Pernah Diikuti </small></h4>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Nama Pelatihan</th>
                     <th scope="col">Penyelenggara</th>
                     <th scope="col">Tahun Diklat</th>
                     <th scope="col">Nomor Sertifikasi</th>
                     <th scope="col">Tingkat</th>
                     <th scope="col">Jenis Diklat</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
               @foreach($curriculumVitae->RiwayatPelatihan as $key => $row)
              
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->nama_pelatihan}}</span>
                     </div>
                     </td>
                
                     <td class="align-middle text-secondary">{{$row->penyelenggara}}</td>
                     <td class="align-middle text-secondary">{{$row->tahun_diklat}}</td>
                     <td class="align-middle text-secondary">{{$row->nomor_sertifikasi}}</td>
                     <td class="align-middle text-secondary">{{$row->tingkat}}</td>
                     <td class="align-middle text-secondary">{{$row->jenis_diklat}}</td>
                    
   
                  </tr>
                 
                  @endforeach
     
               </tbody>
               
            </table>
            <hr class="my-4">
           <!-- Karya Tulis -->
           <div class="row mb-2">
              <div class="col mb-2 mb-md-0">
                <!-- Title -->
                <div class="mb-3">
                  <h2 class="h4 mb-0">Karya Tulis</h2>
                  
                </div>
                <!-- End Title -->
                @foreach($curriculumVitae->KaryaTulis as $key => $row)
                <!-- Info -->
                <div class="d-flex mb-3">
                  <img class="u-avatar align-self-center mr-4" src="assets/img/icon/open-book.png" alt="Image Description">
                  <div>
                    <small class="d-block text-secondary">{{$row->tahun}}</small>
                    <h4 class="h6 mb-0">{{$row->judul}}</h4>
                   
                  </div>
                </div>
                <!-- End Info -->
                @endforeach
                
              </div>
            </div>
          <!-- Pengalaman Sebagai Pembicara Narasumber -->
            <hr class="my-4">
            <div class="mb-3">
            <h2 class="h4 mb-0">Pengalaman Sebagai Pembicara dan Narasumber</h2>
            
            </div>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Acara</th>
                     <th scope="col">Penyelenggara</th>
                     <th scope="col">Tahun</th>
                     <th scope="col">Lokasi dan Peserta</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
               @foreach($curriculumVitae->PengalamanNarasumber as $key => $row)
              
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->acara}}</span>
                     </div>
                     </td>
                     <td class="align-middle text-secondary">{{$row->penyelenggara}}</td>
                     <td class="align-middle text-secondary">{{$row->tahun}}</td>
                     <td class="align-middle text-secondary">{{$row->lokasi}}</td>
                  </tr>
                  
                  @endforeach
     
               </tbody>
               
            </table>

            <!-- Referensi -->
            <hr class="my-4">
            <div class="mb-3">
            <h2 class="h4 mb-0">Referensi</h2>
            
            </div>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Perusahaan</th>
                     <th scope="col">Jabatan</th>
                     <th scope="col">Nomor Handphone</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
               @foreach($curriculumVitae->Referensi as $key => $row)
              
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->nama}}</span>
                     </div>
                     </td>
                     <td class="align-middle text-secondary">{{$row->perusahaan}}</td>
                     <td class="align-middle text-secondary">{{$row->jabatan}}</td>
                     <td class="align-middle text-secondary">{{$row->no_hp}}</td>
                  </tr>
                  
                  @endforeach
     
               </tbody>
               
            </table>

             <!-- Keterangan Keluarga -->
             <div class="mb-3">
            <h2 class="h4 mb-0">Keterangan Keluarga</h2>
            <small class="d-block text-primary">1. Suami/Istri</small></h4>
            </div>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                     <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Tempat Lahir</th>
                     <th scope="col">Tanggal Lahir</th>
                     <th scope="col">Tanggal Menikah</th>
                     <th scope="col">Pekerjaan</th>
                     <th scope="col">Keterangan</th>
                     <th scope="col">Jenis Kelamin</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
              
               @foreach($curriculumVitae->KeteranganKeluarga as $row)
               @if($row->status_keluarga == 'Istri')
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->nama}}</span>
                     </div>
                     </td>
                     <td class="align-middle text-secondary">{{$row->tempat_lahir}}</td>
                     <td class="align-middle text-secondary">{{$row->tanggal_lahir}}</td>
                     <td class="align-middle text-secondary">{{$row->tanggal_menikah}}</td>
                     <td class="align-middle text-secondary">{{$row->pekerjaan}}</td>
                     <td class="align-middle text-secondary">{{$row->keterangan}}</td>
                     <td class="align-middle text-secondary">{{$row->jenis_kelamin}}</td>
                    
                  </tr>
                  @endif
                  @endforeach
                
               </tbody>
               
            </table>
            <small class="d-block text-primary mb-3">2. Anak </small></h4>
            <table class="table table-bordered table-sm f-75">
               <thead>
                  <tr>
                  <th scope="col" style="width: 8%;">No</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Tempat Lahir</th>
                     <th scope="col">Tanggal Lahir</th>
                     <th scope="col">Pekerjaan</th>
                     <th scope="col">Keterangan</th>
                     <th scope="col">Jenis Kelamin</th>
                  </tr>
               </thead>
               <tbody>
               @php 
                 $num=0
               @endphp
               @foreach($curriculumVitae->KeteranganKeluarga as $row)
               @if($row->status_keluarga == 'Anak')
                  <tr>
                 
                     <th scope="row">
                     <span class="btn btn-sm btn-icon btn-soft-secondary rounded-circle mr-2">
                        <span class="btn-icon__inner font-weight-medium">{{$num+=1}}</span>
                     </span>
                     </th>
                     <td class="align-middle">
                     <div class="media align-items-center">
                        <span>{{$row->nama}}</span>
                     </div>
                     </td>
                
                     <td class="align-middle text-secondary">{{$row->tempat_lahir}}</td>
                     <td class="align-middle text-secondary">{{$row->tanggal_lahir}}</td>
                     <td class="align-middle text-secondary">{{$row->pekerjaan}}</td>
                     <td class="align-middle text-secondary">{{$row->keterangan}}</td>
                     <td class="align-middle text-secondary">{{$row->jenis_kelamin}}</td>
                    
   
                  </tr>
                  @endif
                  @endforeach
     
               </tbody>
               
            </table>
            <hr class="my-4">
          
            <div class="row mb-7">
              <div class="col mb-7 mb-md-0">
                <!-- Title -->
                <div class="mb-3">
                  <h2 class="h4 mb-0">Summary</h2>
                  <small class="d-block text-secondary">Menggambarkan keahlian/kompetensi, value pribadi, & visi pribadi</small></h4>
                </div>
                <!-- End Title -->

                <!-- Info -->
                <div class="d-flex mb-5">
                  <img class="u-avatar align-self-center mr-4" src="assets/img/160x160/img17.png" alt="Image Description">
                  <div>
                    <small class="d-block text-secondary">Jul 2018</small>
                    <h4 class="h6 mb-0">Senior Frontend Developer</h4>
                    <span class="d-block text-secondary">at Google - SF, US</span>
                  </div>
                </div>
                <!-- End Info -->

                <!-- Info -->
                <div class="d-flex">
                  <img class="u-avatar align-self-center mr-4" src="assets/img/160x160/img14.png" alt="Image Description">
                  <div>
                    <small class="d-block text-secondary">Aug 2016 - Jul 2018</small>
                    <h4 class="h6 mb-0">Junior Frontend Developer</h4>
                    <span class="d-block text-secondary">at Slack Inc - London, UK</span>
                  </div>
                </div>
                <!-- End Info -->
              </div>


            </div>

            

            <!-- Title -->
            <div id="reviews" class="mb-3">
              <h3 class="h4 mb-0">Reviews <span class="text-muted font-size-1">(125)</span></h3>
            </div>
            <!-- End Title -->

            <!-- Reviews -->
            <div>
              <!-- Author -->
              <div class="media mb-3">
                <img class="u-avatar rounded-circle mr-3" src="assets/img/100x100/img3.jpg" alt="Image Description">

                <div class="media-body align-self-center">
                  <h4 class="d-inline-block mb-1">
                    <a class="d-block h6 mb-0" href="#">Russel Fernandes</a>
                  </h4>
                  <ul class="list-inline text-warning small mb-0">
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star"></span>
                    </li>
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star"></span>
                    </li>
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star"></span>
                    </li>
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star"></span>
                    </li>
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star text-warning"></span>
                    </li>
                  </ul>
                </div>

                <div class="media-body text-right">
                  <small class="d-block text-muted">3 hours ago.</small>
                </div>
              </div>
              <!-- End Author -->

              <p>At the end of the day, it's important to not let being busy distract us from having fun. Smiling, laughing, and hanging helps us work together to achieve this.</p>

              <!-- Likes/Reply -->
              <ul class="list-inline d-flex">
                <li class="list-inline-item">
                  <a class="text-secondary" href="#">
                    17
                    <span class="far fa-thumbs-up ml-1"></span>
                  </a>
                </li>
                <li class="list-inline-item ml-3">
                  <a class="text-secondary" href="#">
                    0
                    <span class="far fa-thumbs-down ml-1"></span>
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="text-secondary" href="#">
                    <span class="far fa-comments mr-1"></span>
                    Reply
                  </a>
                </li>
              </ul>
              <!-- End Likes/Reply -->
            </div>
            <!-- End Reviews -->

            <hr class="my-7">

            <!-- Reviews -->
            <div class="mb-7">
              <!-- Author -->
              <div class="media mb-3">
                <img class="u-avatar rounded-circle mr-3" src="assets/img/100x100/img2.jpg" alt="Image Description">

                <div class="media-body align-self-center">
                  <h4 class="d-inline-block mb-1">
                    <a class="d-block h6 mb-0" href="#">Elizabeth Lord</a>
                  </h4>
                  <ul class="list-inline text-warning small mb-0">
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star"></span>
                    </li>
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star"></span>
                    </li>
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star"></span>
                    </li>
                    <li class="list-inline-item mx-0">
                      <span class="fas fa-star"></span>
                    </li>
                    <li class="list-inline-item mx-0">
                      <span class="far fa-star text-warning"></span>
                    </li>
                  </ul>
                </div>

                <div class="media-body text-right">
                  <small class="d-block text-muted">1 day ago.</small>
                </div>
              </div>
              <!-- End Author -->

              <p>It's important to stay detail oriented with every project we tackle. Staying focused allows us to turn every project we complete into something we love. We strive to embrace and drive change in our industry which allows us to keep our clients relevant and ready to adapt.</p>

              <!-- Likes/Reply -->
              <ul class="list-inline d-flex">
                <li class="list-inline-item">
                  <a class="text-secondary" href="#">
                    17
                    <span class="far fa-thumbs-up ml-1"></span>
                  </a>
                </li>
                <li class="list-inline-item ml-3">
                  <a class="text-secondary" href="#">
                    0
                    <span class="far fa-thumbs-down ml-1"></span>
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="text-secondary" href="#">
                    <span class="far fa-comments mr-1"></span>
                    Reply
                  </a>
                </li>
              </ul>
              <!-- End Likes/Reply -->
            </div>
            <!-- End Reviews -->

            <a class="btn btn-block btn-soft-primary transition-3d-hover" href="#">See More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content Section -->
@endsection @push('js')
<script></script>
@endpush