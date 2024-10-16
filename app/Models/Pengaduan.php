<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Fondation\Auth\User as Authentciable;

class Admin extends Model
{
    use HasFactory;

    protected $primarykey = 'nik';

    protected $fillable = [
        'nik', 'nama', 'email', 'email_verified_at', 'username', 'password', 'tepl', 'provider_id', 'provider',
    ];

}
