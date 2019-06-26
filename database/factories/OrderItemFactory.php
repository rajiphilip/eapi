<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Order;
use App\Model\Product;
use App\Model\OrderItem;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'order_id' => function () {
            return Order::all()->random();
        },
        'product_id' => function () {
            return Product::all()->random();
        },
        'quantity' => $faker->numberBetween(1, 3),
        'amount' => $faker->randomFloat(2, 500, 800),
    ];
});
