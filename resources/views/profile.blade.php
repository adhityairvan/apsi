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
                <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
            </div>
            <div class="col-sm-3">
                <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
            </div>
            <div class="col-sm-3">
                <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
            </div>
            <div class="col-sm-3">
                <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">Nama : Nikita Willy</div>
            <div class="col-sm-6">Umur : 16</div>
        </div>
        <div class="row">
            <div class="col-sm-6">Domisili : Jakarta</div>
            <div class="col-sm-6">Pengalaman Kerja : 15</div>
        </div>
        @yield('extra-row')

        <div class="row">
            <div class="col-sm-12">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Pesan Tenaga Kerja</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </div>
        </div>

    </div>
@endsection