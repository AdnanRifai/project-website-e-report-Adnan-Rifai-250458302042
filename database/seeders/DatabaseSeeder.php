<?php

namespace Database\Seeders;

use App\Models\Laporan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'alamat' => 'Padang',
            'password' => Hash::make('admin'),
            'no_whatsapp' => '080822814',
            'foto' => 'admin.jpg',
            'role' => 'admin',
        ]);

        $warga = User::create([
            'name' => 'Udin',
            'email' => 'udin@example.com',
            'alamat' => 'Padang',
            'password' => Hash::make('warga'),
            'no_whatsapp' => '080822814',
            'foto' => 'warga.jpg',
            'role' => 'warga',
        ]);

        $laporan = Laporan::create([
            'judul' => 'Laporan',
            'detail' => 'laporan',
            'tanggal' => now(),
            'foto' => 'laporan.jpg',
            'status' => 'pending',
            'pelapor_id' => $admin->id,
        ]);
    }
}
