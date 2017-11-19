@extends('master')

@section('title')
    Daftar Baru
    @endsection

@section('body')
    <style>
        .bs-example  div[class^="col"] {
            border: 1px solid white;d
        background: #f5f5f5;
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <h1>Daftar Baru</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="ValidatePassword">Re Enter Password</label>
                        <input type="password" class="form-control" id="ValidatePassword" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <label for="NamaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="NamaLengkap" placeholder="Nama sesuai yang tertera di KTP">
                    </div>
                    <div class="form-group">
                        <label for="KotaTinggal">Kota</label>
                        <select class="form-control" id="KotaTinggal">
                            <option>Jakarta</option>
                            <option>Bekasi</option>
                            <option>Bogor</option>
                            <option>Depok</option>
                            <option>Tangerang</option>
                            <option>Luar Jabotabek</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Alamat Lengkap</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="ALAMAAT"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="NoTelp">Nomor Telpon</label>
                        <input type="tel" class="form-control" id="NoTelp" placeholder="Nomor Telfon HP/Rumah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Foto KTP</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Upload foto ktp berukuran dibawah 10mb dengan tipe file .jpg atau .png</small>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Data diatas sudah benar
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection