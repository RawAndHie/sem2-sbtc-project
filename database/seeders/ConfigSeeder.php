<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('configs')->truncate();
        \Illuminate\Support\Facades\DB::table('configs')->insert([
            [
                'id' => 1,
                'contactUsPage' => 'html mau',
                'aboutUsPage' => 'html mau',
                'policyPage' => 'html mau',
                'titlePage' => 'html mau',
                'descriptionPage' => 'html mau',
                'keywordPage' => 'html mau',
                'created_at' => Carbon::create(2021, 8, 21, 21, 40, 16), //->diffForHumans(Carbon::now()),
                'updated_at' => Carbon::now()
            ]
    ]);
    }
}
