@extends('layouts.main')

@section('content')
            <div id="page-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Arsip Surat >> Unggah
                            </h1>
                            Unggah surat yang telah terbit pada form ini untuk diarsipkan<br>
                            Catatan:<br>
                            - Gunakan file berformat PDF
<br>
                            <div class="jumbotron col-lg-11">
                                <form action="/arsip/unggah" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-wrapper d-flex" >
                                    <label  class="label-input">Nomor Surat</label>
                                    <input type="text" class="form-control1" name="nomor" required>
                                </div>
                                <div class="form-wrapper">
                                    <label>Kategori</label>
                                    <select class="form-control2" name="kategori" required>
                                    <option value="Undangan">Undangan</option>
                                    <option value="Pengumuman">Pengumuman</option>
                                    <option value="Nota">Nota Dinas</option>
                                    <option value="Pemberitahuan">Pemberitahuan</option>
                                    </select>
                                </div>
                                <div class="form-wrapper">
                                    <label for="" class="label-input">Judul</label>
                                    <input type="text" class="form-control3" name="judul" required>
                                </div>
                                <div class="form-wrapper">
                                    <label for="" class="label-input">File Surat (PDF)</label>
                                    <input type="file" class="form-control4" name="file_arsip" >
                                </div>
                                <br><br>
                                <a class="btn btn-success" href="{{ url('/') }}" role="button"><< Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection