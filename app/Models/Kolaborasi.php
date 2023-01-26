<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kolaborasi extends Model
{
    use HasFactory;

    protected $table = 'kolaborasi';
    protected $fillable =  [
        'kolaborasi_id',
        'waktu_pengajuan',
        'alasan_ikut',
        'kemampuan',
        'penelitian_id',
        'pelaku_industri_id',
        'waktu_persetujuan',
        'disetujui'
        ] ;

    public function penelitian(){
        return $this->belongsTo("App\Models\Penelitian", "penelitian_id");
    }
}
