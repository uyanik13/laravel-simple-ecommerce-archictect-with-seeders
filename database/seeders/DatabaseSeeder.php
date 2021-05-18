<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Customer::factory(1)->create();
         \App\Models\Product::factory(1000)->create();
         \App\Models\BillingAddress::factory(5000)->create();
         \App\Models\ShippingAddress::factory(5000)->create();
         \App\Models\Order::factory(750000)->create();
         \App\Models\OrderItem::factory(350000)->create();
    }
}
