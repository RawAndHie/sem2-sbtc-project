<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('admins')->truncate();
        \Illuminate\Support\Facades\DB::table('admins')->insert([
            [
                'admin_id' => 1,
                'username' => 'tranduc',
                'password' => 'tranduc123',
                'email' => 'tranduc@gmail.com',
                'full_name' => Carbon::now(),


            ],
            [
                'admin_id' => 2,
                'username' => 'tranduc1',
                'password' => 'tranduc1235',
                'email' => 'tranduc2@gmail.com',
                'full_name' => 'Trần Đức'
            ],

        ]);
    }
}
