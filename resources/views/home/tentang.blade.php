@extends('layouts.app')

@section('title', 'Tentang Aplikasi')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tentang Aplikasi</h3>
                </div>
                <div class="card-body">
                    <p>Aplikasi <b>{{ config('app.name') }}</b> adalah aplikasi untuk pembuatan surat seputusan yang didalamnya memiliki fasilitas untuk tracking surat keputusan, pembuatan surat keputusan.</p>
                    <dl>
                      <dt>Description lists</dt>
                      <dd>A description list is perfect for defining terms.</dd>
                      <dt>Euismod</dt>
                      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                      <dt>Malesuada porta</dt>
                      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>
@endsection