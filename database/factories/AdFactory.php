<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'slug' => $this->faker->sentence(1),
            'text' => $this->faker->sentence(4),
            'phone' => $this->faker->sentence(1),
            'status' => '1',
            'user_id' => '1',
            'domain_id' => '1',
            // 'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
