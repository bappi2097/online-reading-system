<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::factory()->count(20)->create();

        $newsCategories = NewsCategory::get()->map(function ($data) {
            return $data->id;
        });

        $tags = Tag::get()->map(function ($data) {
            return $data->id;
        });
        foreach (News::all() as $news) {
            $news->attach(array_slice($newsCategories, 0, rand(0, count($newsCategories) - 1)));
        }

        foreach (News::all() as $news) {
            $news->attach(array_slice($tags, 0, rand(0, count($tags) - 1)));
        }
    }
}
