<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name'         => 'index-users',
                'display_name' => 'Lihat Data User'
            ],
            [
                'name'         => 'create-users',
                'display_name' => 'Tambah User'
            ],
            [
                'name'         => 'show-users',
                'display_name' => 'Lihat Detail User'
            ],
            [
                'name'         => 'edit-users',
                'display_name' => 'Ubah User'
            ],
            [
                'name'         => 'destroy-users',
                'display_name' => 'Hapus User'
            ],
            [
                'name'         => 'index-roles',
                'display_name' => 'Lihat Data Role'
            ],
            [
                'name'         => 'create-roles',
                'display_name' => 'Tambah Role'
            ],
            [
                'name'         => 'show-roles',
                'display_name' => 'Lihat Detail Role'
            ],
            [
                'name'         => 'edit-roles',
                'display_name' => 'Ubah Role'
            ],
            [
                'name'         => 'destroy-roles',
                'display_name' => 'Hapus Role'
            ],
            [
                'name'         => 'index-settings',
                'display_name' => 'Lihat Data Setting'
            ],
            [
                'name'         => 'index-news',
                'display_name' => 'Lihat Data Berita'
            ],
            [
                'name'         => 'create-news',
                'display_name' => 'Tambah Berita'
            ],
            [
                'name'         => 'show-news',
                'display_name' => 'Lihat Detail Berita'
            ],
            [
                'name'         => 'edit-news',
                'display_name' => 'Ubah Berita'
            ],
            [
                'name'         => 'destroy-news',
                'display_name' => 'Hapus Berita'
            ]
        ]);
    }
}
