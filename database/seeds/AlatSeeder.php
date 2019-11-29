<?php

use Illuminate\Database\Seeder;

class AlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('alat')->insert([
        'recipes_id' => 1,
        'nama_alat' => 'Penggorengan',
      ]);

      DB::table('alat')->insert([
        'recipes_id' => 1,
        'nama_alat' => 'Spatula',
      ]);

      DB::table('alat')->insert([
        'recipes_id' => 1,
        'nama_alat' => 'Kompor',
      ]);

      DB::table('alat')->insert([
        'recipes_id' => 2,
        'nama_alat' => 'Mangkok',
      ]);

      DB::table('alat')->insert([
        'recipes_id' => 2,
        'nama_alat' => 'Garpu',
      ]);

      DB::table('alat')->insert([
        'recipes_id' => 2,
        'nama_alat' => 'Kompor',
      ]);
    }
}
