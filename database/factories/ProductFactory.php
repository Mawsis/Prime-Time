<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Color;

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
    public function definition(): array
    {
        $genders = ['male','female','unisex'];
        $images = ['/images/Watch1.jpg','/images/Watch2.jpg','/images/Watch3.png'];
        return [
            "name"=>fake()->name,
            "slug"=>fake()->slug,
            "desc"=>fake()->paragraph(3),
            "price"=>fake()->randomFloat(2,0,15000),
            "quantity"=>fake()->randomNumber(2,2),
            "color_id"=>Color::factory()->create()->id,
            "gender"=>$genders[rand(0,2)],
            "image"=>$images[rand(0,2)],
        ];
    }
}
