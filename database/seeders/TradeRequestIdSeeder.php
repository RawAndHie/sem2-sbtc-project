<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TradeRequestIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('trade_requests')->truncate();
        \Illuminate\Support\Facades\DB::table('trade_requests')->insert([
            [
                'trade_request_id' => 1,
                'trade_id' => 2,
                'request_id' => 2,
                'status' => 0,
                'create_at' => Carbon::now()->subDay(5),
                'update_at' => Carbon::now()->subDay(1)
            ],
            [
                'trade_request_id' => 2,
                'trade_id' => 2,
                'request_id' => 2,
                'status' => 0,
                'create_at' => Carbon::now()->subDay(5),
                'update_at' => Carbon::now()->subDay(1)
            ],
            [
                'trade_request_id' => 3,
                'trade_id' => 2,
                'request_id' => 2,
                'status' => 0,
                'create_at' => Carbon::now()->subDay(5),
                'update_at' => Carbon::now()->subDay(1)
            ],
            [
                'trade_request_id' => 4,
                'trade_id' => 2,
                'request_id' => 2,
                'status' => 0,
                'create_at' => Carbon::now()->subDay(5),
                'update_at' => Carbon::now()->subDay(1)
            ]
            ]);
    }
}
