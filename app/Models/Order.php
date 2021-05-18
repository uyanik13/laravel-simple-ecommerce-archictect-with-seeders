<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];


   public function customer()
  {
    return $this->belongsTo('App\Models\Customer');
  }

   public function billing_address()
  {
    return $this->belongsTo('App\Models\BillingAddress');
  }

   public function shipping_address()
  {
    return $this->belongsTo('App\Models\ShippingAddress');
  }

  public function order_items()
  {
    return $this->hasMany('App\Models\OrderItem');
  }


}
