<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'admin',
            'name' => 'admin1',
            'email' => 'admin@gmail.com',
            'picture' => '../assets_2/images/faces/default.png',
        ]);
    }
}
