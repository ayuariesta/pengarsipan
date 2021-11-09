<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Surat;
use Response;

class SuratController extends Controller
{
    public function index(){

        $data_surat = DB::table('surat')
        ->orderByRaw('created_at DESC')
        ->paginate(10);

        
        return view('layouts/arsip', [
            'title' => "Arsip",
            'data_surat' => $data_surat
        ]);
    }

    public function cari (Request $request){
        $cari = $request->cari;

        $search = DB::table('surat')
        ->where('judul', 'like',"%".$cari."%")
        ->paginate();

        return view('layouts.arsip',[
            'title' => "Cari Surat",
            'data_surat' => $search
        ]);
    }

    public function hapus($id){

        $hapus = DB::table('surat')
        ->where('id', $id)
        ->delete();

        return redirect()->back();
    }

    public function store(Request $request){

            $request->validate([
                'file_arsip' => 'mimes:pdf'
            ]);

            $file = $request->file('file_arsip');
            
            $file_name = $file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();
            $file_real_path = $file->getRealPath();
            $file_size = $file->getSize();

            $destinationPath = 'arsip';
            $file->move($destinationPath, $file->getClientOriginalName());

            $arsip = Surat::create([
                "nomor" => $request->nomor,
                "kategori" => $request->kategori,
                "judul" => $request->judul,
                "file_arsip" => $file_name
            ]);

            $arsip->save(); // Finally, save the record.

        return redirect('/');
    }

    public function form(){
        return view('layouts/unggah',[
            'title' => "Form Unggah",
        ]);
    }

    public function view($id){
        $data_arsip = Surat::find($id);

        return view('layouts.tampil', [
            'title' => "View Surat"
        ], compact('data_arsip'));
    }

    public function download(Request $request, $id){
        $dl = DB::table('surat')
        ->where('id', $id)
        ->get();
        $file_path = public_path('arsip/'.$dl->file_arsip);
        return response()->download($file_path);
    }

}
