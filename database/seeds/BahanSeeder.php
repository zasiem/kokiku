<?php

use Illuminate\Database\Seeder;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahan')->insert([
          'recipes_id' => 1,
          'nama_bahan' => 'Nasi',
        ]);

        DB::table('bahan')->insert([
          'recipes_id' => 1,
          'nama_bahan' => 'Saos',
        ]);

        DB::table('bahan')->insert([
          'recipes_id' => 1,
          'nama_bahan' => 'Bawang',
        ]);

        DB::table('bahan')->insert([
          'recipes_id' => 2,
          'nama_bahan' => 'Mie',
        ]);

        DB::table('bahan')->insert([
          'recipes_id' => 2,
          'nama_bahan' => 'Kecap',
        ]);

        DB::table('bahan')->insert([
          'recipes_id' => 2,
          'nama_bahan' => 'Bawang',
        ]);
    }
}
