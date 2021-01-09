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
        NewsCategory::create(
            [
                'name' => 'Mobile',
                'slug' => 'mobile',
            ]
        );

        NewsCategory::create(
            [
                'name' => 'Tablet',
                'slug' => 'tablet'
            ]
        );

        NewsCategory::create(
            [
                'name' => 'Hot News',
                'slug' => 'hot-news',
            ],
        );

        NewsCategory::create(
            [
                'name' => 'Top Viewd',
                'slug' => 'top-viwed',
            ],
        );
    }
}
