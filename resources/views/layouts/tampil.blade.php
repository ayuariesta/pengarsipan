@extends('layouts.main')

@section('content')
            <div id="page-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Arsip Surat >> Lihat
                            </h1>
                            @if($data_arsip)
                                Nomor: {{ $data_arsip->nomor }}<br>
                                Kategori: {{ $data_arsip->kategori }}<br>
                                Judul: {{ $data_arsip->judul }}<br>
                                Waktu Unggah: {{ $data_arsip->created_at }}<br>
                            @else
                                Data Tidak Ditemukan
                            @endif
                            <div class="jumbotron col-lg-11">
                                <iframe height="1200" width="960" src="/arsip/{{$data_arsip->file_arsip}}"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection