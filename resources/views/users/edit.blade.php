@extends('layouts.app') @section('title', 'Edit Data User') @section('content')

<div class="bg-light">
    <div class="container space-2">
        <form action="{{ url('users/update',  Crypt::encryptString($user->id)) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            
            <!--include form-->
            @include('users.form')

            <div class="form-group">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-warning text-nowrap transition-3d-hover"><span class="fas fa-arrow-left small mr-2"></span> Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary text-nowrap transition-3d-hover"><span class="fas fa-save small mr-2"></span> Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection