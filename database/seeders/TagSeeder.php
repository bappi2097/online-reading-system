<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Tag::create([
            'name' => "Tech"
        ]);

        Tag::create([
            'name' => "Transport"
        ]);

        Tag::create([
            'name' => "Mobile"
        ]);

        Tag::create([
            'name' => "Gadgets"
        ]);
    }
}
