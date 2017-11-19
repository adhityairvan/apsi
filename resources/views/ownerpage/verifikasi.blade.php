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
                <h1>Verifikasi Tenaga Kerja</h1>
                <table class="table">
                    <tr>
                        <th>Tenaga Kerja</th>
                    </tr>
                    <tbody>
                    <tr>
                        <td>Nikita Willy</td>
                        <td>
                            <a href="#" class="list-group-item list-group-item-action">Verifikasi</a>
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection