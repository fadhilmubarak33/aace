<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $table = 'penelitian';
    protected $fillable =  [
        'penelitian_id',
        'judul',
        'nomor',
        'volume',
        'tahun',
        'bidang_industri',
        'akademisi_id',
        'link_artikel'
        ] ;

}
