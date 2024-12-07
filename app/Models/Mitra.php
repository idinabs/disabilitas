<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory; // Ensure the trait is included

    protected $fillable = ['instansi', 'alamat']; // Fixed the typo here
}
