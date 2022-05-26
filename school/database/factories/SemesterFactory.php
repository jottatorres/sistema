<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SemesterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'semester_name' => $this->faker->name(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}