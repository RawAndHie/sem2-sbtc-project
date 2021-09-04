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
                'id' => 1,
                'username' => 'huyphuc',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$OOCM3XX6MGEZ6dlnP6WhAOpflPo0JJ4whiYS9ch3U3xOFON8bz92u',
                'gmail' => 'dieuhuyphuc@gmail.com',
                'gender' => 1,
                'full_name' => 'Huy Phúc',
                'phone' => '124365478',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324',
            ],
            [
                'id' => 2,
                'username' => 'iamraw',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$OOCM3XX6MGEZ6dlnP6WhAOpflPo0JJ4whiYS9ch3U3xOFON8bz92u',
                'gmail' => 'tranduc@gmail.com',
                'gender' => 1,
                'full_name' => 'Trần Đức',
                'phone' => '124365473',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id_1' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324'
            ],
            [
                'id' => 3,
                'username' => 'minhtu',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$OOCM3XX6MGEZ6dlnP6WhAOpflPo0JJ4whiYS9ch3U3xOFON8bz92u',
                'gmail' => 'nguyenminhtu@gmail.com',
                'gender' => 1,
                'full_name' => 'Minh Tú',
                'phone' => '124365475',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id_1' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324'
            ],
            [
                'id' => 4,
                'username' => 'quanghuy',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$OOCM3XX6MGEZ6dlnP6WhAOpflPo0JJ4whiYS9ch3U3xOFON8bz92u',
                'gmail' => 'nguyenquanghuy@gmail.com',
                'gender' => 1,
                'full_name' => 'Quang Huy',
                'phone' => '1243654448',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id_1' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324'
            ],
            [
                'id' => 5,
                'username' => 'manhtri',
                'password_salt' => '4fIQTyOqjzFI5JByx3ck31dmvXkUr9RtcDzmbwXsWb2NkNC6NeDgwn9x3p6GkAfW',
                'password_hash' => '$2y$10$OOCM3XX6MGEZ6dlnP6WhAOpflPo0JJ4whiYS9ch3U3xOFON8bz92u',
                'gmail' => 'dinhmanhtri@gmail.com',
                'gender' => 1,
                'full_name' => 'Mạnh Trí',
                'phone' => '124232478',
                'image_avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'image_id_1' => 'https://cdn.luatminhkhue.vn/lmk/articles/12/61370/huong-dan-thu-tuc-cap-lai-chung-minh-thu--cmnd---the-can-cuoc-khi-bi-mat-theo-quy-dinh-moi-nhat---61370.jpg',
                'id_number' => '1244134324'
            ],

        ]);

    }
}
