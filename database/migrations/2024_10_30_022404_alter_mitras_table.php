<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('mitras', function (Blueprint $table) {
            
       
$table->text('alamat')->nullable()->change(); // Allow NULL values if needed
        });
    }

    
   
public function down()
    {
        Schema::table('mitras', function (Blueprint $table) {
            $table->text('alamat')->nullable(false)->change(); // Revert to NOT NULL if needed
        });
    }
};
