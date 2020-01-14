@extends('layouts.app') @section('title', 'Blank Page') @section('content')
<div class="container-fluid">
   <div class="header">
      <div class="header-body">
         <div class="row align-items-center">
            <div class="col ml-md-n2">
               <!-- Pretitle -->
               <h6 class="header-pretitle">
                  Page
               </h6>
               <!-- Title -->
               <h1 class="header-title">
                  Blank Page
               </h1>
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
                        Blank Page Header
                     </h4>
                  </div>
               </div>
               <!-- / .row -->
            </div>
            <div class="card-body">
                Silahkan isi untuk konten disini. Created by: <b><a href="https://www.linkedin.com/in/laniasepsutisna/" target="_blank">Lani Asep Sutisna</a></b>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection @push('js')
<script></script>
@endpush