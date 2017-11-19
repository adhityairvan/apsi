@extends('master')

@section('title')
    Batal Kontrak
    @endsection

@section('body')
    <div class="container">
        <form>
            <div class="form-group">
                <label for="alasanPembatalan">Alasan Pembatalan</label>
                <textarea class="form-control" id="alasanPembatalan" rows="3" placeholder="Alasan"></textarea>
            </div>
            <div class="form-group">
                <label for="TanggalDihubungi">Tanggal Konfirmasi : </label>
                <input type="date" class="form-control" aria-describedby="tanggalHelp" id="TanggalDihubungi">
                <small id="tanggalHelp" class="form-text text-muted">Isi Kapan Anda Bisa Dihubungi Untuk Konfirmasi</small>
            </div>
            <div class="form-group">
                <label for="konfirmPassword">Konfirmasi Password : </label>
                <input type="password" class="form-control" id="konfirmPassword" placeholder="Konfirmasi Password anda">
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
    @endsection