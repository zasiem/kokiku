<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(RecipesSeeder::class);
        $this->call(BahanSeeder::class);
        $this->call(AlatSeeder::class);
        $this->call(TutorialSeeder::class);
    }
}
