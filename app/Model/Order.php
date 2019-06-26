<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\OrderItem;
use App\User;


class Order extends Model
{
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
