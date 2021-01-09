<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Cache\TagSet;
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
        $this->call([
            MetaSeeder::class,
            AdminSeeder::class,
            NewsCategorySeeder::class,
            TagSeeder::class,
            UserSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
