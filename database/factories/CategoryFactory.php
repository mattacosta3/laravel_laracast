<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->randomElement(['Code','Development','Career','Skills','Productivity','Focus',
        'CodingTips','Programming','Projects','Tools','Frameworks','RemoteWork','Freelance','Learning','Efficiency']);

        return [
            'name' => $name,
            'slug' => $name . fake()->slug()
        ];
    }
}
