<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akademisi extends Model
{
    use HasFactory;

    protected $table = 'akademisi';
    protected $fillable =  [
        'akademisi_id',
        'nama_peniliti',
        'universitas',
        'email',
        'password',
        // 'role_id',
        'email_verified_at'
        ] ;

}
