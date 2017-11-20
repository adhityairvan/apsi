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
    <div class="container bs-example">
        <!-- Bootstrap Grid -->

        <div class="row">
            <div class="col-md-12"><h1>Detail Booking</h1></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">Nama Penyewa</div>
                    <div class="col-md-7">Bahdlor</div>
                </div>
                <div class="row">
                    <div class="col-md-5">Nama Tenaga Kerja</div>
                    <div class="col-md-7">Nikita Willy</div>
                </div>
                <div class="row">
                    <div class="col-md-5">ID Booking</div>
                    <div class="col-md-7">10984509283</div>
                </div>
            </div>
        </div>
    </div>
@endsection