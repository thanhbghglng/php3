<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsProduct>
 */
class NewsProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'news_id'=>$this->faker->numberBetween(1,25),
            'product_id'=>$this->faker->numberBetween(103,150)
            //
        ];
    }
}
