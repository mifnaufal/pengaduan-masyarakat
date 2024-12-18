<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Fondation\Auth\User as Authentciable;

class Laporan extends Model
{
    use HasFactory;

    protected $primarykey = 'id_pengaduan';
    protected $table = 'tanggapan';

    protected $fillable = [
        'tanggal_tanggapan', 'tanggapan', 'id_petugas', 'level', 'status',
    ];

}
