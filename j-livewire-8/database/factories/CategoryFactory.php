<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //iniciamos la segunda parte sembrando datos falsos
        return [
            'name'=> $this->faker->word
        ];
    }
}
