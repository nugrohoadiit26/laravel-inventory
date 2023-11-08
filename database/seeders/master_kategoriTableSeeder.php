<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class master_kategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_kategori')->insert([

            [
                'kode'              => 'MKN',
                'nama_kategori'     => 'Makanan',
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],

            [
                'kode'              => 'MNM',
                'nama_kategori'     => 'Minuman',
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ]

        ]);
    }
}
