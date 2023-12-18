<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param = [
      'name' => 'ato',
      'email' => 'a@example.com',
      'password' => 'a'
    ];
    DB::table('users')->insert($param);
    $param = [
      'name' => 'jack',
      'email' => 'b@example.com',
      'password' => 'America'
    ];
    DB::table('users')->insert($param);
    $param = [
      'name' => 'sara',
      'email' => 'c@example.com',
      'password' => 'American'
    ];
    DB::table('users')->insert($param);
    $param = [
      'name' => 'saly',
      'email' => 'd@example.com',
      'password' => 'Ameri'
    ];
    DB::table('users')->insert($param);
    }
}
