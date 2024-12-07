<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('dosens', function (Blueprint $table) {
            $table->string('jenis_jabatan')->nullable(); // Menambahkan kolom jenis_jabatan
        });
    }

    
    public function down()
    {
        Schema::table('dosens', function (Blueprint $table) {
            $table->dropColumn('jenis_jabatan'); // Menghapus kolom jenis_jabatan jika migrasi di-rollback
        });
    }
};
