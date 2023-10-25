<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stok_barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stok_barang')->insert([
            [
                'kode'              => 'TGO-KLG',
                'stok_masuk'        => 30,
                'stok_keluar'       => 0,
                'stok_sisa'         => 30,
                'stok_minimal'      => 5,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
            [
                'kode'              => 'TGO-SAC',
                'stok_masuk'        => 20,
                'stok_keluar'       => 0,
                'stok_sisa'         => 20,
                'stok_minimal'      => 2,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],



        ]);
    }
}
