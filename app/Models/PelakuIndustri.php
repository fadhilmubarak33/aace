<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelakuIndustri extends Model
{
    use HasFactory;

    protected $table = 'pelakuindustri';
    protected $fillable =  [
        'pelakuindustri_id',
        'nama',
        'email',
        'telepon',
        'password',
        // 'role_id',
        'bidang_industri',
        'nama_perusahaan',
        'file_cv'
        ] ;

}
