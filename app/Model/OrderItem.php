<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class OrderItem extends Model
{
    public function order() {
        return $this->belongsTo(Order::class);
    }
}
