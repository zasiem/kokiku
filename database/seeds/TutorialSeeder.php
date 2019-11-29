<?php

use Illuminate\Database\Seeder;

class TutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tutorial')->insert([
        'recipes_id' => 1,
        'tutorial' => 'Siapkan Nasi',
      ]);

      DB::table('tutorial')->insert([
        'recipes_id' => 1,
        'tutorial' => 'Goreng Nasi',
      ]);

      DB::table('tutorial')->insert([
        'recipes_id' => 1,
        'tutorial' => 'Sajikan',
      ]);

      DB::table('tutorial')->insert([
        'recipes_id' => 2,
        'tutorial' => 'Siapkan Mie',
      ]);

      DB::table('tutorial')->insert([
        'recipes_id' => 2,
        'tutorial' => 'Rebus Mie',
      ]);

      DB::table('tutorial')->insert([
        'recipes_id' => 2,
        'tutorial' => 'Sajikan',
      ]);
    }
}
