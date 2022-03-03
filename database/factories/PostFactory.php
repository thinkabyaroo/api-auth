<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->realText(10),
            'description'=>$this->faker->realText(300),
            'photo'=>'default.png',
            'user_id'=>rand(1,5)

        ];
    }
}
