@extends('master')

@section('title')
    Daftar Tenaga Kerja
@endsection

@section('body')
    <!-- Styles (so that we can see the grid) -->
    <style>
        .bs-example  div[class^="col"] {
            border: 1px solid white;d
        background: #f5f5f5;
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>

    <div class="container bs-example">
        <!-- Bootstrap Grid -->

        <div class="row">
            <div class="col-sm-12"><h1>Daftar Tenaga Kerja</h1></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="list/profile" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : Nikita
                        </div>
                        <div class="list-group-item">
                            Umur : 16
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : 15
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">Detil</a>
                        <a href="staffpage/edit" class="list-group-item list-group-item-action">Edit</a>
                        <a href="staffpage/hapus" class="list-group-item list-group-item-action">Hapus</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection