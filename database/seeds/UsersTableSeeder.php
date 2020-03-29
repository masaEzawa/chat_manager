<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // usersテーブルに登録するレコードを配列で定義する。何人登録するかは任意。弊社は15名前後なので全員ここに記述した。
      DB::table('users')->insert([
          [
              'name'           => 'くろ admin',
              'email'          => 'ezawamasa@gmail.com',
              'password'       => Hash::make('password'),
              'user_type'      => 1,
              'remember_token' => str_random(10),
          ],
      ]);
    }
}
