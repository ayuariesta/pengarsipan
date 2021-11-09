@extends('layouts.main')
@section('content')
            <div id="page-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Arsip Surat
                            </h1>
                            Berikut ini adalah surat-surat yang telah terbit dan diarsipkan<br>
                            Klik "Lihat" pada kolom aksi untuk menampilkan surat
                            <div class="jumbotron col-lg-11">
                                    <div class="col-md-6 d-inline">
                                        <form action="/arsip/cari" method="GET">
                                            <div class="input-group custom-search-form">
                                                <span class="tulisan">
                                                </span>
                                                <input type="search" name="cari" class="form-control" placeholder="search">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary">Cari</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                <table class="table table-bordered">
                                    <thead class="table table-info">
                                        <th>Nomor Surat</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Waktu Pengarsipan</th>
                                        <th>Aksi</th>
                                    </thead>
                                    @foreach($data_surat as $ds)
                                    <tbody>
                                        <td>{{ $ds->nomor }}</td>
                                        <td>{{ $ds->kategori }}</td>
                                        <td>{{ $ds->judul }}</td>
                                        <td>{{ $ds->created_at }}</td>
                                        <td>
                                            <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus arsip surat ini?')" href="/arsip/hapus/{{ $ds->id }}">Hapus</a>
                                            <a href="{{ url('/arsip',$ds->file_arsip) }}" type="button" class="btn btn-warning">Unduh</a>
                                            <a href="{{ url('/tampil',$ds->id) }}" type="button" class="btn btn-primary">Lihat >></a>
                                        </td>
                                    </tbody>
                                    @endforeach
                                </table>
                                <div class="container">
                                    <a href="{{ url('/arsip/form-unggah') }}" type="button" class="btn btn-info">Arsipkan Surat..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
