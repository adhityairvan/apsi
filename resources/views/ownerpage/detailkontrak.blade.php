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
                <h1>Detail Kontrak</h1>
                <table class="table">
                    <tr>
                        <th>Penyewa</th>
                        <th>Tenaga Kerja</th>
                        <th>Tanggal Kontrak</th>
                        <th>Penempatan Kerja</th>
                    </tr>
                    <tbody>
                    <tr>
                        <td>Adhitya Irvansyah</td>
                        <td>Nikita Willy</td>
                        <td>19 April 1997</td>
                        <td>JL. Wisma Permai Tengah V CC31 Bekasi</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection