@extends('welcome')

@section('content')
                    <br></br>
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h1 class="page-header">
                                Arsip Surat >> Unggah
                            </h1>
                            Unggah surat yang telah terbit pada form ini untuk diarsipkan<br>
                            Catatan:<br>
                            - Gunakan file berformat PDF
                            <br>
                            <br><br>

                                <div class="col-md-12">
                                <form action="/arsip/unggah" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <label  class="label-input">Nomor Surat</label>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="text"  class="col-md-5" name="NoSurat" required>
                                </div>
                                <br>

                                <div class="col-md-12">
                                    <label>Kategori</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <select class="form-control2" name="Kategori" required>
                                    <option value="Undangan">Undangan</option>
                                    <option value="Pengumuman">Pengumuman</option>
                                    <option value="Nota">Nota Dinas</option>
                                    <option value="Pemberitahuan">Pemberitahuan</option>
                                    </select>
                                </div>
                                <br>

                                <div class="col-md-12">
                                    <label for="" class="label-input">Judul</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="text" class="col-md-7" name="Judul" required>
                                </div>
                                <br>

                                <div class="col-md-12">
                                    <label for="" class="label-input">File Surat (PDF)</label>
                                    <input type="file" class="form-control4" name="arsipan" >
                                </div>
                                <br><br>

                                <a class="btn btn-success" href="{{ url('/Arsip-surat') }}" role="button"><< Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
