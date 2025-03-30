<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->unique()->numerify('###########'),
            'status_id' => $this->faker->randomElement([1,2,3]),
            'external_id' => $this->faker->uuid(),
            'result'=>$this->faker->boolean('40'),
        ];
    }
}
