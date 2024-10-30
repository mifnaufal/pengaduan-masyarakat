<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Fondation\Auth\User as Authentciable;

class Admin extends Model
{
    use HasFactory;

    protected $primarykey = 'pengaduan';

    protected $fillable = [
        'tanggal_pengaduan', 'nik', 'judul_laporan', 'isi_laporan', 'lokasi_kejadian', 'tanggal_kejadian', 'foto', 'kategori_kejadian', 'status'
    ];

}
