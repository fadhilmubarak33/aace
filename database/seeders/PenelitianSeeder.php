<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Akademisi;
use App\Models\Penelitian;
use Hash;
use DB;

class PenelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("akademisi")->truncate();
        DB::table("penelitian")->truncate();

        $akademisi = new Akademisi;
        $akademisi->nama_peneliti = "Amar";
        $akademisi->universitas = "Universitas Negeri Malang";
        $akademisi->email = "amar@gmail.com";
        $akademisi->password = Hash::make('123456');
        $akademisi->save();

        Penelitian::factory()->count(50)->create([
            "akademisi_id" =>  $akademisi->id,
            "bidang_industri" => "aplikasigame"
        ]);

        Penelitian::factory()->count(50)->create([
            "akademisi_id" =>  $akademisi->id,
            "bidang_industri" => "kriya"
        ]);

        Penelitian::factory()->count(50)->create([
            "akademisi_id" =>  $akademisi->id,
            "bidang_industri" => "fashion"
        ]);

        Penelitian::factory()->count(50)->create([
            "akademisi_id" =>  $akademisi->id,
            "bidang_industri" => "kuliner"
        ]);

        Penelitian::factory()->count(50)->create([
            "akademisi_id" =>  $akademisi->id,
            "bidang_industri" => "animasi"
        ]);
    }
}
