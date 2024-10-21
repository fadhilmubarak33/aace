<?php

namespace App\Http\Controllers;
use App\Models\Penelitian;
use Illuminate\Http\Request;


class PenelitianController extends Controller
{
    public function index($jenis){
        $data["jenis"] = $jenis;
        switch($jenis){
            case "kriya":
                $data["judul_jenis"] = "Kriya";
                break;

            case "fashion":
                $data["judul_jenis"] = "Fashion";
                break;

            case "kuliner":
                $data["judul_jenis"] = "Kuliner";
                break;

            case "aplikasigame":
                $data["judul_jenis"] = "Aplikasi & Game";
                break;

            case "animasi":
                $data["judul_jenis"] = "Animasi";
                break;

            case "arsitektur":
                $data["judul_jenis"] = "Arsitektur";
                break;

            case "desaininterior":
                $data["judul_jenis"] = "Desain Interior";
                break;

            case "musik":
                $data["judul_jenis"] = "Musik";
                break;

            case "senirupa":
                $data["judul_jenis"] = "Seni Rupa";
                break;

            case "desainproduk":
                $data["judul_jenis"] = "Desain Produk";
                break;

            case "film":
                $data["judul_jenis"] = "Film";
                break;

            case "fotografi":
                $data["judul_jenis"] = "Fotografi";
                break;

            case "desainkomunikasivisual":
                $data["judul_jenis"] = "Desain Komunikasi Visual";
                break;

            case "televisiradio":
                $data["judul_jenis"] = "Televisi dan Radio";
                break;

            case "periklanan":
                $data["judul_jenis"] = "Periklanan";
                break;

            case "senipertunjukan":
                $data["judul_jenis"] = "Seni Pertunjukan";
                break;

            case "penerbitan":
                $data["judul_jenis"] = "Penerbitan";
                break;

        }


        $data["penelitian"] = Penelitian::where("bidang_industri", $jenis)
            ->take(6)
            ->get();

        return view('penelitian', $data);
    }

    public function detail($slug){

        $data['penelitian'] = Penelitian::where("link_artikel", $slug)->firstOrFail();
        return view('penelitian_detail', $data);
    }
    // pada menu diatas merupakan fungsi untuk memfilter penelitian dimana nantinya akan ditampilkan daftar list satu persatu
}
