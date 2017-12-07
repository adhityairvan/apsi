@extends('master')

@section('body')
    <!-- Styles (so that we can see the grid) -->
    <style>
        .bs-example  div[class^="col"] {
            border: 1px solid white;
            background: #f5f5f5;
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>

    <div class="container bs-example">
        <!-- Bootstrap Grid -->
        <div class="row">
            <div class="col-sm-12">
                <h1>
                    Profil Tenaga Kerja
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <img src="{{ asset($profile->photoUrl) }}" class="img-thumbnail" alt="Sample image" style="width:200px">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset($detail->urlImage1) }}" class="img-thumbnail" alt="Sample image" style="width:200px">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset($detail->urlImage2) }}" class="img-thumbnail" alt="Sample image" style="width:200px">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset($detail->urlImage3) }}" class="img-thumbnail" alt="Sample image" style="width:200px">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">Nama : {{ $profile->nama_tenaga_kerja }}</div>
            <div class="col-sm-6">Umur : {{ $profile->umur() }}</div>
        </div>
        <div class="row">
            <div class="col-sm-6">Domisili : {{ $profile->domisili }}</div>
            <div class="col-sm-6">Pengalaman Kerja : {{ $profile->pengalaman_kerja }}</div>
        </div>
        @yield('extra-row')

        <div class="row">
            <div class="col-sm-12">
                <div class="list-group">
                    <a href="@if(Auth::check())book/{{$profile->id}}@else /login @endif" class="list-group-item list-group-item-action">Pesan Tenaga Kerja</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p>
                    {{ $detail->deskripsi }}
                </p>
            </div>
        </div>

    </div>
@endsection