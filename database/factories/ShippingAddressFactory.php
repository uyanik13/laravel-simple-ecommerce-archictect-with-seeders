<?php

namespace Database\Factories;

use App\Models\ShippingAddress;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShippingAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShippingAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'line_1' => $this->faker->address,
            'line_2' => null,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'postcode' => $this->faker->postcode,
        ];
    }


}
