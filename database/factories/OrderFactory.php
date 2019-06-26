<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Order;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => function(){
           return User::all()->random();
        },
        'total_amount' => $faker->randomFloat(2, 1000, 5000),
    ];
});
