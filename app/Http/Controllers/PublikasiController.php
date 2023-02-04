<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;
use App\Models\Akademisi;
use Illuminate\Support\Facades\DB;

class PublikasiController extends Controller
{
       public function create()
    {
        $akademisi = DB::table('akademisi')
            ->select('akademisi.*')
            ->get();
        $penelitian = DB::table('penelitian')
            ->select('penelitian.*')
            ->get();
        return view('publikasi_form',compact('akademisi','penelitian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "nama_peneliti" =>  'required',
                "universitas" =>  'required',
                "judul" => 'required',
                "tahun" => 'required',
                "bidang_industri" => 'required',
                "file_pendukung" =>  'required',
                "akademisi_id" =>  'required',
            ],


        );

        try {
            DB::table('penelitian')->insert([
                "nama_peneliti" => $request->namapeneliti,
                "universitas" => $request->universitas,
                "judul"  => $request->judul,
                "tahun" => $request->tahun,
                "bidang_industri" =>  $request->bidang_industri,
                "file_pendukung" =>  $request->file_pendukung,
                "akademisi_id" =>  $request->akademisi_id,

            ]);
            return redirect()->route('form-publikasi')->with('','Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back();
        }

    }

}
