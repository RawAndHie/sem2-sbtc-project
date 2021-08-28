<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'id' => 1,
                'account_id' => 1,
                'category_id' => 1,
                'title' => 'Ví dụ : Cần đổi + tên sản phẩm',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://saigoncalendar.com/wp-content/uploads/2019/06/photo1514606141082-1514606141082-1514690372285.jpg' ,
                //address sẽ có dạng 'số , số , số, địa chỉ' , số thứ nhất từ 01 tới 96, số thứ 2 từ 001 tới 676,
                // số thứ 3 từ 00001  tới 01435, chỉ lấy hà nội nên soó thứ nhất để 01 , số thứ 2 từ 001 đến 021
                // số thứ 3 từ 00001 tới 00685
//               ví dụ  'address' => '01, 021 , 00616, Quận Bắc Từ Liêm',
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'account_id' => 2,
                'category_id' => 2,
                'title' => 'cần đổi sách',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'account_id' => 3,
                'category_id' => 3,
                'title' => 'Cần đổi 1 cuốn sách khác về kỹ năng sống.',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'account_id' => 4,
                'category_id' => 1,
                'title' => 'cần đổi sách',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'account_id' => 5,
                'category_id' => 2,
                'title' => 'cần đổi sách',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'account_id' => 3,
                'category_id' => 1,
                'title' => 'cần đổi sách',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'account_id' => 4,
                'category_id' => 3,
                'title' => 'cần đổi sách',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'account_id' => 5,
                'category_id' => 1,
                'title' => 'cần đổi sách',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'account_id' => 2,
                'category_id' => 2,
                'title' => 'cần đổi sách',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'account_id' => 1,
                'category_id' => 3,
                'title' => 'cần đổi sách',
                'description' => 'Ví dụ : cái này cần đổi sang cái gì đó',
                'content' => ' Thông tin chi tiết kiểu còn mới ko , có chập chờn hỏng hóc hay sứt mẻ gì không ',
                'image' => 'http://chinhem.store/wp-content/uploads/2018/08/gm17-e1524401287429.jpg' ,

                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
