@extends('master')

@section('body')
    <style>
        .bs-example  div[class^="col"] {
            border: 1px solid white;
            background: #f5f5f5;
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <h1>Tambah Laporan Keuangan</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label for="tanggal_transaksi">Tanggal Transaksi</label>
                        <input class="form-control" type="date" id="tanggal_transaksi" name="tanggal_transaksi" value="{{$laporan->tanggal_transaksi}}">
                    </div>
                    <div class="control-group">
                        <label for="tipe_transaksi">Tipe Transaksi</label>
                        <select class="form-control" id="tipe_transaksi" name="tipe_transaksi">
                            <option @if($laporan->tipe_transaksi == "Masuk") selected @endif value="Masuk">Pemasukan</option>
                            <option @if($laporan->tipe_transaksi == "Keluar") selected @endif value="Keluar">Pengeluaran</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label for="keterangan_transaksi">Keterangan Transaksi</label>
                        <input type="text" class="form-control" id="keterangan_transaksi" name="keterangan_transaksi" value="{{$laporan->keterangan_transaksi}}">
                    </div>
                    <div class="control-group">
                        <label for="nominal_transaksi">Nominal Transaksi</label>
                        <input type="number" class="form-control" id="nominal_transaksi" name="nominal_transaksi" value="{{$laporan->nominal_transaksi}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection