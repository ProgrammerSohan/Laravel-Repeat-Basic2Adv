<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        //php artisan make:factory PostFactory
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'status' => rand(0,1),
            'publish_date' => fake()->date(),
            'user_id'   => 1,
            'category_id' => rand(1,4),
            'views' => rand(0, 100)

        ];
    }
}
