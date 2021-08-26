<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('account_clients')->truncate();
        \Illuminate\Support\Facades\DB::table('account_clients')->insert([
            [
                'account_id' => 1,
                'username' => 'huyphuc',
                'password' => '2811',
                'gmail' => 'dieuhuyphuc@gmail.com',
                'gender' => 1,
                'full_name' => 'dieuhuyphuc',
                'phone' => '124365478',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324',
            ],
            [
                'account_id' => 2,
                'username' => 'tranduc',
                'password' => '1234',
                'gmail' => 'tranduc@gmail.com',
                'gender' => 1,
                'full_name' => 'trananhduc',
                'phone' => '124365473',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id_1' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324'
            ],
            [
                'account_id' => 3,
                'username' => 'minhtu',
                'password' => '2321',
                'gmail' => 'nguyenminhtu@gmail.com',
                'gender' => 1,
                'full_name' => 'nguyenminhtu',
                'phone' => '124365475',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id_1' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324'
            ],
            [
                'account_id' => 4,
                'username' => 'quanghuy',
                'password' => '2341',
                'gmail' => 'nguyenquanghuy@gmail.com',
                'gender' => 1,
                'full_name' => 'nguyenquanghuy',
                'phone' => '1243654448',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id_1' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324'
            ],
            [
                'account_id' => 5,
                'username' => 'manhtri',
                'password' => '2321',
                'gmail' => 'dinhmanhtri@gmail.com',
                'gender' => 1,
                'full_name' => 'dinhmanhtri',
                'phone' => '124232478',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id_1' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324'
            ],

        ]);

    }
}
