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
            <div class="col-md-12">
                <div class="container">
                    <h1>Form Tambah Data Tenaga Kerja</h1>
                    <form action="test">
                        <div class="form-group row">
                            <label for="first_name" class="col-xs-3 col-form-label mr-2">Nama</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ttl" class="col-xs-3 col-form-label mr-2">Tempat Tanggal Lahir</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="ttl" name="ttl">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nomor KTP" class="col-xs-3 col-form-label mr-2">Nomor KTP</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="noktp" name="noktp">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Domisili" class="col-xs-3 col-form-label mr-2">Domisili</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="domisili" name="domisili">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Umur" class="col-xs-3 col-form-label mr-2">Umur</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="umur" name="umur">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pendidikan" class="col-xs-3 col-form-label mr-2">Pendidikan Terakhir</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pengalaman" class="col-xs-3 col-form-label mr-2">Pengalaman Kerja</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="pengalaman" name="pengalaman">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-xs-3 col-form-label mr-2">Upload Foto</label>
                            <div class="col-xs-9">
                                <input type="file" class="form-control-file" id="foto" name="foto">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-xs-3 col-xs-9">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection