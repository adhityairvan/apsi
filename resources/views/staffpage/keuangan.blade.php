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

        <div class="row">
            <div class="col-md-12">
                <h1>Kelola Keuangan</h1>
                <table class="table">
                    <tr>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                        <th>Penginput</th>
                        <th>Manage</th>
                    </tr>
                    <tbody>
                    <tr>
                        <td>19 April 1997</td>
                        <td>Pengeluaran</td>
                        <td>Rp. 1.000.000,00</td>
                        <td>Pembayaran Listrik Bulanan</td>
                        <td>Staff Faris</td>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">Cetak</a>
                        </td>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">Hapus</a>
                        </td>

                    </tr>
                    @if(is_null($keuangan) == False)
                        @foreach($keuangan as $row)
                            <tr>
                                <td>{{$row->tanggal_transaksi}}</td>
                                <td>{{$row->tipe_transaksi}}</td>
                                <td>Rp. {{$row->nominal_transaksi}},00</td>
                                <td>{{$row->keterangan_transaksi}}</td>
                                <td>{{$row->pegawai->nama_pegawai}}</td>
                                @if(Auth::user()->profil_type == 'owner')
                                    <td>
                                        <a href="edit/{{$row->id}}" class="list-group-item list-group-item-action">Edit</a>
                                    </td>
                                    <td>
                                        <a href="hapus/{{$row->id}}" class="list-group-item list-group-item-action">Hapus</a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="/staff/keuangan/tambah/"><button class="btn btn-primary">Tambah Laporan</button></a>
                <a href="/staff/keuangan/cetak"><button class="btn btn-success">Cetak</button></a>
            </div>
        </div>
    </div>
@endsection