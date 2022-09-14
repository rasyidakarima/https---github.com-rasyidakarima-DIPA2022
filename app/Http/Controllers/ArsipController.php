<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArsipController extends Controller
{

    public function index()
    {
        $arsip = DB::table('arsip')
        ->orderByRaw('tanggal_arsip DESC')
        ->paginate(10);


        return view('Arsip.arsipView', [
            'title' => "Arsip",
            'arsip' => $arsip
        ]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'arsipan' => 'mimes:pdf'
        ]);

        $file = $request->file('arsipan');

        $arsipan = $file->getClientOriginalName();
        $file_extension = $file->getClientOriginalExtension();
        $file_real_path = $file->getRealPath();
        $file_size = $file->getSize();

        $destinationPath = 'arsip';
        $file->move($destinationPath, $file->getClientOriginalName());


        DB::insert('insert into arsip(NoSurat,Kategori,Judul,arsipan)
        Values(?,?,?,?)',[
            $request->NoSurat,
            $request->Kategori,
            $request->Judul,
            $arsipan]);
    return redirect('Arsip-surat');

    }

    public function search (Request $request){
        $search = $request->search;

        $arsip = DB::table('arsip')
        ->where('Judul', 'like',"%".$search."%")
        ->paginate();

        return view('Arsip.arsipView',[
            'title' => "Cari Surat",
            'arsip' => $arsip
        ]);
    }

    public function destroy($id)
    {
        $destroy = DB::table('arsip')
        ->where('id', $id)
        ->delete();

        return redirect()->back();
    }
    public function form(){
        return view('Arsip/arsipkan',[
            'title' => "Unggah",
        ]);
    }
    public function lihat($id){
        $arsip =  DB::select('SELECT * FROM arsip WHERE id = ?', [$id]);

        return view('Arsip.Lihat', [
            'title' => "Lihat Surat"
        ], compact('arsip'));
    }
}
