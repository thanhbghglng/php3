<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\imageUrl;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name= $this->faker->name();

        return [
            //
            'name'=>$name,
            'description'=>$this->faker->text(),
            'short_description'=>$this->faker->text(20),
            'price'=>$this->faker->randomFloat(),
            'thumbnail_url'->$this->faker->imageUrl(),
            'status'=>$this->faker->numberBetween(0,1),

        ];
    }
}
