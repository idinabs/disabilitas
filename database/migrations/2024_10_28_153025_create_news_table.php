<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('deskripsi');
            $table->text('content');
            $table->text('kategori');
            $table->string('author')->nullable(); // Menambahkan kolom penulis
            $table->string('image'); // Menambahkan kolom penulis
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
};
