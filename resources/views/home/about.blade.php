@extends('layouts.app') @section('title', 'About') @section('content')

<div class="container">
    <ol class="breadcrumb df-breadcrumbs mg-b-10">
        <li class="breadcrumb-item"><a href="{{ @url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Management @yield('title')</li>
    </ol>

    <hr class="mg-y-20">
    <div class="d-sm-flex align-items-center justify-content-between ">
        <div>
            <h4 id="section1" class="mg-b-10">Management @yield('title')</h4>
            <p class="mg-b-30">Menu Management @yield('title') berfungsi untuk melakukan penambahan, edit dan menghapus data @yield('title') sekaligus memanagement data @yield('title').</p>
        </div>
    </div>
</div>
<!-- container -->

@endsection @push('js')

@endpush