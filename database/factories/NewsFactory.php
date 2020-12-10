<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $title = $this->faker->sentences(1);
        // $slug = preg_replace("/[^a-zA-Z0-9]/i", "-", strtolower($title));
        return [
            "title" => $this->faker->sentences(1),
            'slug' => $this->faker->sentences(1),
            "image" => "https://via.placeholder.com/150",
            // 'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'author' => $this->faker->name,
            'short_description' => $this->faker->sentences(3),
            'body' => $this->faker->sentences(10),
            'quote' => $this->faker->sentences(1),
        ];
    }
}
