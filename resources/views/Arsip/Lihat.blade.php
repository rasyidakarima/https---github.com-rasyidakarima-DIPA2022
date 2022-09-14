@extends('welcome')
@section('content')
                <br></br>
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h1 class="page-header">
            <h1 class="page-header"> Arsip Surat >> Lihat </h1>
            @foreach ($arsip as $arp)
            <tr>
                Nomor : {{ $arp->NoSurat }} <br>
                Kategori: {{ $arp->Kategori }} <br>
                Judul : {{ $arp ->Judul }} <br>
                Waktu Unggah : {{ $arp->tanggal_arsip}}<br>
            @endforeach
                <div class="card-body">
                    <iframe height="500" width="1050" src="/arsip/{{$arp->arsipan}}"></iframe>
                </div>
                <a href="{{url('/Arsip-surat')}}" type="button" class="btn btn-primary"> << Kembali</a>
                <a href="{{ url('/arsip',$arp->arsipan) }}" type="button" class="btn btn-primary">Unduh</a>
                <a href="" type="button" class="btn btn-primary">Edit/Ganti File</a>
@endsection

