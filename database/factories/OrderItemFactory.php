<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(1,2500),
            'product_id' => $this->faker->numberBetween(1,1000),
            'quantity' => $this->faker->numberBetween(1,5),
            'subtotal' => $this->faker->randomFloat(2,0,500),
        ];
    }


}
