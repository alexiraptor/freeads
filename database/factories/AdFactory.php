<?php

namespace Database\Factories;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            // 'image' => $this->faker->word(),
            'description' => $this->faker->sentence(12),
            'price' => $this->faker->randomFloat(2, 10000, 500000),
            'street' => $this->faker->streetAddress,
            'postcode' => $this->faker->numberBetween(30001, 97000),
            'city' => $this->faker->city,
            'surface' => $this->faker->numberBetween(30, 300),
            'room' => $this->faker->numberBetween(1, 6),
            'category_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
