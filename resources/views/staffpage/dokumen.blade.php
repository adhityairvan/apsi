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
                <h1>Kelola Dokumen Perjanjian</h1>
                <table class="table">
                    <tr>
                        <th>Penyewa</th>
                        <th>Tenaga Kerja</th>
                        <th>Tanggal Kontrak</th>

                    </tr>
                    <tbody>
                    <tr>
                        <td>Adhitya Irvansyah</td>
                        <td>Nikita Willy</td>
                        <td>19 April 1997</td>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">View</a>
                        </td>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">Download</a>
                        </td>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">Hapus</a>
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection