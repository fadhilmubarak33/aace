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
        'namaakademisi',
        'username',
        'password',
        'role_id'

        ] ;

}
