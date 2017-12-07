@extends('master')

@section('title')
    Daftar Tenaga Kerja
@endsection

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
            <div class="col-sm-12"><h1>Daftar Tenaga Kerja</h1></div>
        </div>

        @foreach($list as $items)
            @if($loop->index % 3 == 0)
                <div class="row">
            @endif
            <div class="col-sm-4">
                <div class="container">
                    <img src="{{ asset($items->photoUrl) }}" class="img-thumbnail" alt="Sample image" style="width:200px">
                    <div class="list-group">
                        <div class="list-group-item ">
                            Nama : {{$items->nama_tenaga_kerja}}
                        </div>
                        <div class="list-group-item">
                            Umur : {{ $items->umur() }}
                        </div>
                        <div class="list-group-item">
                            Pengalaman Kerja : {{$items->pengalaman_kerja}}
                        </div>
                        <a href="list/profile/{{$items->id}}" class="list-group-item list-group-item-action">Detil</a>
                    </div>
                </div>
            </div>
            @if($loop->index % 2 == 0)
                </div>
            @endif

            @endforeach

    </div>
@endsection