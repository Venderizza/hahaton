<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Call>
 */
class CallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $date = $this->faker->dateTimeBetween('-1 year', 'now');
        return [
            'lead_id' => Lead::factory(),
            'status_id' => $this->faker->randomElement([1,2,3]),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
