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
}
