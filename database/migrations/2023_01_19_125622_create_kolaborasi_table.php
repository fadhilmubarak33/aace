<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolaborasi', function (Blueprint $table) {
            $table->id();
            $table->integer('waktu_pengajuan');
            $table->string('alasan_ikut');
            $table->string('kemampuan');
            $table->bigInteger('penelitian_id');
            $table->bigInteger('pelaku_industri_id');
            $table->integer('waktu_persetujuan');
            $table->string('persetujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kolaborasi');
    }
};
