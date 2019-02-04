<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function product()
    {
      return $this->belongsTo(\App\Product::class,'product_id');
    }

    public function user()
    {
      return $this->belongsTo(\App\User::class,'user_id');
    }
}
