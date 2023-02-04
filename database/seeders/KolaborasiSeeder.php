<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KolaborasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("pelakuindustri")->truncate();
        DB::table("penelitian")->truncate();

        $pelakuindustri = new PelakuIndustri;
        $pelakuindustri->nama = "Amar";
        $pelakuindustri->email = "amar@gmail.com";
        $pelakuindustri->telepon = "087654321";
        $pelakuindustri->password = Hash::make('123456');
        $pelakuindustri->bidang_industri = "aplikasi&game";
        $pelakuindustri->nama_perusahaan = "Malang Creative Center";
        $pelakuindustri->file_cv = "";
        $pelakuindustri->save();
    }
}
