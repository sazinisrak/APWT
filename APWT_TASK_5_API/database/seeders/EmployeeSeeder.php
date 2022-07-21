<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'username' => 'employee',
            'name' => 'employee 1',
            'email' => 'employee@gmail.com',
            'picture' => '../assets_2/images/faces/default.png',
        ]);
    }
}
