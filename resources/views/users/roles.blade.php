@extends('layouts.app')
@section('title', 'Set Role')
@section('content')

<div class="bg-light">
   <div class="container space-2">
         <form action="{{ url('users/roles', Crypt::encryptString($user->id)) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT"> @if (session('success')) @alert(['type' => 'success']) {{ session('success') }} @endalert @endif
            <div class="table-responsive">
               <table class="table table-bordered">
                  <tbody>
                     <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td>{{ $user->name }}</td>
                     </tr>
                     <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                     </tr>
                     <tr>
                        <th>Role</th>
                        <td>:</td>
                        <td>
                           @foreach ($roles as $row)
                           <input type="radio" name="role" {{ $user->hasRole($row) ? 'checked':'' }} value="{{ $row }}"> {{ $row }}
                           <br> @endforeach
                        </td>
                     </tr>
                     </thead>
               </table>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-warning text-nowrap transition-3d-hover"><span class="fas fa-arrow-left small mr-2"></span> Kembali</a>
            <button type="submit" class="btn btn-sm btn-primary text-nowrap transition-3d-hover"><span class="fas fa-save small mr-2"></span> Simpan</button>
         </form>
   </div>
</div>

@endsection