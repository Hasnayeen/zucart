<?php

namespace Database\Factories;

use App\ValueObjects\Dimensions;
use App\ValueObjects\Weight;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'category_id' => \App\Models\Category::factory(),
            'store_id' => \App\Models\Store::factory(),
            'name' => $this->faker->name,
            'sku' => $this->faker->word,
            'description' => $this->faker->text,
            'image' => $this->faker->word,
            'price_in_cents' => $this->faker->randomNumber(),
            'currency' => $this->faker->currencyCode,
            'quantity' => $this->faker->randomNumber(),
            // 'dimensions' => Dimensions::make(
            //     length: $this->faker->randomNumber(),
            //     width: $this->faker->randomNumber(),
            //     height: $this->faker->randomNumber(),
            //     unit: $this->faker->word,
            // ),
            // 'weight' => Weight::make(
            //     value: $this->faker->randomNumber(),
            //     unit: $this->faker->word,
            // ),
            // 'barcode' => $this->faker->text,
            // 'attributes' => $this->faker->word,
        ];
    }
}
