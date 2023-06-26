<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'category_id' => category::factory(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->text()

        ];
    }
}
