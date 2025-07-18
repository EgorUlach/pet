<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => $this->faker->sentence(),
            'profile_id' => Profile::inRandomOrder()->first()->id,
            'is_published' => fake()->boolean,
            'category_id' => Category::inRandomOrder()->first()->id,
            'published_at' => fake()->dateTime(),
        ];
    }
}
