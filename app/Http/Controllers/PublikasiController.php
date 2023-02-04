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
                "judul" =>  'required',
                "nomor" =>  'required',
                "volume" => 'required',
                "tahun" => 'required',
                "link_artikel" => 'required',
                "akademisi_id" =>  'required',
            ],


        );

        try {
            DB::table('penelitian')->insert([
                "judul" => $request->judul,
                "nomor" => $request->nomor,
                "volume" => $request->volume,
                "tahun" => $request->tahun,
                "link_artikel" =>  $request->link_artikel,
                "akademisi_id" =>  $request->akademisi_id,

            ]);
            return redirect()->route('publikasi_form')->with('success','Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back();
        }

    }

}
