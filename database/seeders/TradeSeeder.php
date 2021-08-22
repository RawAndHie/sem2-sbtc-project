<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('trades')->truncate();
        \Illuminate\Support\Facades\DB::table('trades')->insert([
            [
                'trade_id' => 1,
                'account_id' => 1,
                'category_id' => 1,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách dể đời đáng để đọc 1 lần trong đời ',
                'image' => 'http://saigoncalendar.com/wp-content/uploads/2019/06/photo1514606141082-1514606141082-1514690372285.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 1,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 2,
                'account_id' => 2,
                'category_id' => 2,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 2,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 3,
                'account_id' => 3,
                'category_id' => 3,
                'title' => 'Cần đổi 1 cuốn sách khác về kỹ năng sống.',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 3,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 4,
                'account_id' => 4,
                'category_id' => 4,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 4,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 5,
                'account_id' => 5,
                'category_id' => 5,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 5,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 6,
                'account_id' => 6,
                'category_id' => 6,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 6,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 7,
                'account_id' => 7,
                'category_id' => 7,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 7,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 8,
                'account_id' => 8,
                'category_id' => 8,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 8,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 9,
                'account_id' => 9,
                'category_id' => 9,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 9,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'trade_id' => 10,
                'account_id' => 10,
                'category_id' => 10,
                'title' => 'cần đổi sách',
                'content' => ' 1 quyển sách giải mã bí ẩn ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 10,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
        ]);
    }
}
