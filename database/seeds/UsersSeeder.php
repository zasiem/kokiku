<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@kokiku.com',
          'password' => Hash::make('admin'),
          'role' => 'admin',
        ]);

        DB::table('users')->insert([
          'name' => 'user',
          'email' => 'user@kokiku.com',
          'password' => Hash::make('user'),
          'role' => 'user',
        ]);
    }
}
