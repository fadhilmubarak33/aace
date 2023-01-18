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
        'namapelakuindustri',
        'username',
        'password',
        'role_id'

        ] ;

}
