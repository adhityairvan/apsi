@extends('master')

@section('title')
    Manage Kontrak Kerja
    @endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <h1>Manage Kontrak</h1>
                        </div>
                    </div>
                </div>
                @if(!empty($kontraks))
                    @foreach($kontraks as $kontrak)
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="container">
                                    <img src="{{URL::asset($kontrak->pekerja->photoUrl)}}" class="img-thumbnail" alt="Sample image" style="width:200px">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="container">
                                    <p>Nama : {{$kontrak->pekerja->nama_tenaga_kerja}}</p>
                                    <p>Umur : {{$kontrak->pekerja->umur()}} tahun</p>
                                    <p>Lama Kontrak : 8 Bulan</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="container">
                                        <a href="manage-kontrak/review/{{$kontrak->id}}"><button class="btn btn-primary">Isi Review</button></a>
                                        <a href="manage-kontrak/batal/{{$kontrak->id}}"><button class="btn btn-danger">Batalkan Kontrak</button></a>
                                        <a href="manage-kontrak/upload/{{$kontrak->id}}"><button class="btn btn-warning">Upload Dokumen Perjanjian</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                <div class="row">
                    <div class="col-sm-4">
                        <div class="container">
                            <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="container">
                            <p>Nama : Nikita</p>
                            <p>Umur : 16 tahun</p>
                            <p>Lama Kontrak : 8 Bulan</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <a href="#"><button class="btn btn-primary">Isi Review</button></a>
                            <a href="#"><button class="btn btn-danger">Batalkan Kontrak</button></a>
                            <a href="#"><button class="btn btn-warning">Upload Dokumen Perjanjian</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="container">
                            <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="container">
                            <p>Nama : Nikita</p>
                            <p>Umur : 16 tahun</p>
                            <p>Lama Kontrak : 8 Bulan</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <a href="#"><button class="btn btn-primary">Isi Review</button></a>
                            <a href="#"><button class="btn btn-danger">Batalkan Kontrak</button></a>
                            <a href="#"><button class="btn btn-warning">Upload Dokumen Perjanjian</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection