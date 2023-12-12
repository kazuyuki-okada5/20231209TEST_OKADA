<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
      'categry_id' => '1',
      'first_name' => 'tony',
      'last_name' => 'tonys',
      'gender' => '1:男性',
      'email' => 'tony@example.com',
      'tell' => '0123456789',
      'address' => '1-2-3',
      'building' => 'マンション',
      'detail' => '商品交換',
    ];
    DB::table('authors')->insert($param);
    }
}
