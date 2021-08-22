<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
                'admin_id' => '1',
                'username' => 'Huyphuc',
                'password' => '123456',
                'gmail' => 'phuc@gmail.com',
                'full_name' => 'Điều Huy Phúc',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'admin_id' => '2',
                'username' => 'Minhtu',
                'password' => '654321',
                'gmail' => 'tu@gmail.com',
                'full_name' => 'Nguyễn Minh Tú',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'admin_id' => '3',
                'username' => 'Quanghuy',
                'password' => '123321',
                'gmail' => 'huy@gmail.com',
                'full_name' => 'Nguyễn Quang Huy',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'admin_id' => '4',
                'username' => 'Tranduc',
                'password' => '112233',
                'gmail' => 'duc@gmail.com',
                'full_name' => 'Trần Tiến Đức',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'admin_id' => '5',
                'username' => 'Manhtri',
                'password' => '001122',
                'gmail' => 'tri@gmail.com',
                'full_name' => 'Đinh Mạnh Trí',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
