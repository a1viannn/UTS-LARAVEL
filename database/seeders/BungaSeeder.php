<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bunga;

class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bunga::create([
            'nama' => 'Contoh Bunga',
            'deskripsi' => 'Bunga seringkali digunakan sebagai pemercantik ruangan atau halaman',
            'stok' => '1',
            'harga' => 'Rp. 0',
        ]);
    }
}
