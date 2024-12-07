<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nama',    
        'nip',
        'jabatan',
        'bidang',
        'pangkat',
        'image',
        'jenis_jabatan',
    ];
}
