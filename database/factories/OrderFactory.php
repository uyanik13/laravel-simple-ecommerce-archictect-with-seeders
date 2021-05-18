<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $payment_methods = ['Credit Card','Google Pay','Gift Card','Bank Transfer','Paypal'];
        $shipping_methods = ['UKMail','TNT','Amazon Shipping','DHL Express','DHL'];
        $type_status = ['pending','approved','cancelled'];

        return [
            'customer_id' => 1,
            'payment_method' => Arr::random($payment_methods),
            'shipping_method' => Arr::random($shipping_methods),
            'company_id' => 1,
            'type' => Arr::random($type_status),
            'billing_address_id' => $this->faker->numberBetween(1,100),
            'shipping_address_id' => $this->faker->numberBetween(1,100),
            'total' => $this->faker->randomFloat(2,0,999),
        ];
    }


}
