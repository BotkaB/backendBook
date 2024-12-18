<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author'=>fake('hu_HU')->name(),
            'title'=>fake()->sentence(),
            'pieces'=>rand(0,201),
            'prices'=>rand(1500,35000)



        ];
    }
}
