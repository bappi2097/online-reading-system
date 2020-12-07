<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsCategory::insert(
            [
                'name' => 'Mobile',
                'slug' => 'mobile',
            ],
            [
                'name' => 'Tablet',
                'slug' => 'tablet',
            ],
            [
                'name' => 'Hot News',
                'slug' => 'hot-news',
            ],
        );
    }
}
