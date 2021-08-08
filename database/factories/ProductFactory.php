<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this.faker->name(),
            'price' => $this.faker->randomNumber(2),
            'description' => $this.faker->text(20),
            'productId' => $this.faker->unique()->randomNumber(),
        ];
    }
     /**
         * Indicate that the model's email address should be unverified.
         *
         * @return \Illuminate\Database\Eloquent\Factories\Factory
         */
}
