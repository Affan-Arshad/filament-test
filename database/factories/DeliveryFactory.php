<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\Delivery;
use App\Models\Shop;

class DeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Delivery::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'shop_id' => Shop::factory(),
            'batch_id' => ::factory(),
            'return_qty' => $this->faker->numberBetween(-10000, 10000),
            'delivered_qty' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
