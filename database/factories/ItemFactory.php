<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(2, 1000, 10000),
            'description' => $this->faker->text(),
            'img' => fake()->randomElement([
                'https://images.unsplash.com/photo-1612927601601-6638404737ce',
                'https://plus.unsplash.com/premium_photo-1668146927669-f2edf6e86f6f',
                'https://images.unsplash.com/photo-1603133872878-684f208fb84b',
            ]),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
