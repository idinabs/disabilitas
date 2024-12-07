<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus semua admin lama (opsional)
        Admin::truncate();

        Admin::updateOrCreate(
            ['email' => 'admin@admin12.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('iniadmin'), // Hash password dengan "iniadmin"
            ]
        );
    }
}
