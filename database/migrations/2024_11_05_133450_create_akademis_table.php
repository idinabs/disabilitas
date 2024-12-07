<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('akademis', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul
            $table->string('deskripsi'); // Deskripsi singkat
            $table->text('content'); // Konten utama
            $table->string('kategori'); // Kategori
            $table->string('author')->nullable(); // Penulis (opsional)
            $table->string('image'); // Path gambar
            $table->string('file_name'); // Nama file PDF
            $table->string('file_path'); // Path file PDF
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akademis');
    }
};
