<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $with = ['product'];
    protected $guarded = [];


    public function product()
  {
    return $this->belongsTo('App\Models\Product');
  }

}
