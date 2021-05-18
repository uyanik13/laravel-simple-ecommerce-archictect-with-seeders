<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('shipping_method')->nullable();
            $table->integer('company_id')->nullable();
            $table->string('type')->default('pending');
            $table->foreignId('billing_address_id')->nullable();
            $table->foreignId('shipping_address_id')->nullable();
            $table->string('total')->nullable();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('billing_address_id')->references('id')->on('billing_addresses');
            $table->foreign('shipping_address_id')->references('id')->on('shipping_addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
