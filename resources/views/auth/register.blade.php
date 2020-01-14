@extends('layouts.auth') @section('title', 'Pendaftaran User') @section('content')

<div class="container h-100">
    <div class="row h-100">
        <div class="col-sm-8 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">Pendaftaran User</h1>
                    <p class="lead">
                        Silahkan masukan data secara lengkap untuk mendaftar menjadi user.
                    </p>
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

                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Form Pendaftaran</h5>
                            <h6 class="card-subtitle text-muted">Isi sesuai dengan data asli.</h6>
                        </div>
                        <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Nama Lengkap" required> @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus> 
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> 
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required placeholder="Password"> @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Konfirmasi Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Password Konfirmasi" required novalidate>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox m-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">Apakah Ini Benar Data Asli ?</span>
                                    </label>
                                </div>
                                
                                <div class="form-group">
                                    <a href="{{ url('/') }}" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                                    <button class="btn btn-primary"><i class="fas fa-user-check"></i> Daftar User</button>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection