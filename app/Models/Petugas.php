<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Fondation\Auth\User as Authentciable;

class Petugas extends Model
{
    use HasFactory;
    
    protected $primarykey = 'id_petugas';

    protected $fillable = [
        'nama_petugas', 'username', 'password', 'telp', 'status',
    ];
}
