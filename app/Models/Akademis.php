<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akademis extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'deskripsi',
        'content',
        'kategori',
        'author',
        'image', // Path gambar
        'file_name', // Nama file PDF
        'file_path', // Path file PDF
    ];
}
