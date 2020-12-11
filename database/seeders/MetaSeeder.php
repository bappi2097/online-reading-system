<?php

namespace Database\Seeders;

use App\Models\Meta;
use Illuminate\Database\Seeder;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meta::create([
            'title' => "ORS (Online Reading System)",
            "logo" => "/assets/img/logo.png",
            "author" => "Akash",
            'favicon' => "/assets/img/favicon.ico",
            'description' => "Competently conceptualize go forward testing procedures and B2B expertise. Phosfluorescently cultivate principle-centered methods.of empowerment through fully researched. ",
            'keyword' => "news, news-paper, online reading system, ors",
            'copyright' => "© Copyright DIU",
        ]);
    }
}
