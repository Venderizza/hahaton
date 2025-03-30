<?php

namespace Database\Seeders;

use App\Models\Call;
use App\Models\Lead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lead::factory()->has(Call::factory()->count(fake()->numberBetween(1,3)))->count(1000)->create();
    }
}
