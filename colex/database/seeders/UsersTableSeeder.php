<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'     => 'Khidir Zahid',
                'username' => 'khidirdotid',
                'email'    => 'mail@khidir.id',
                'avatar'   => 'avatar-1.jpg',
                'password' => bcrypt('khidir123'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name'     => 'Admin',
                'username' => 'admin',
                'email'    => 'admin@dsacolex.id',
                'avatar'   => 'avatar-2.jpg',
                'password' => bcrypt('123'),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
