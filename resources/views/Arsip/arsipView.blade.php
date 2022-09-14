@extends('welcome')
@section('content')
                <br></br>
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h1 class="page-header">
            <h1 class="page-header"> Arsip Surat </h1>
            <br> Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.
            <br> Klik "Lihat" pada kolom aksi untuk menampilkan surat.</br>
            <br>
                <div class="col-md-12">
                    <form action="/arsip/search" method="GET">
                        <div class="input-group custom-search-form">
                            <span class="tulisan">
                            </span>
                            <input type="search" name="search" class="form-control" placeholder="search">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </span>
                        </div>
                    </form>
                </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="viewTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Tanggal Arsip</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arsip as $arp)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $arp->NoSurat }}</td>
                                    <td>{{ $arp->Kategori }}</td>
                                    <td>{{ $arp ->Judul }}</td>
                                    <td>{{ $arp->tanggal_arsip}}</td>
                                    <td>
                                        <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus arsip surat ini?')" href="/hapus/{{ $arp->id }}">Hapus</a>
                                        <a href="{{ url('/arsip',$arp->arsipan) }}" type="button" class="btn btn-warning">Unduh</a>
                                            <a href="{{ url('/tampil',$arp->id) }}" type="button" class="btn btn-primary">Lihat >></a>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ url('/arsip/form-unggah') }}" type="button" class="btn btn-primary">Arsipkan Surat</a>
            </div>
        </div>
    </div>
@endsection
