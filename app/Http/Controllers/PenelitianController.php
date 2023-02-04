<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;

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
<<<<<<< HEAD
                $data["judul_jenis"] = "Animasi";                               
=======
                $data["judul_jenis"] = "Animasi";
>>>>>>> ef33309 (update list)
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
