<?php

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
        //$this->call(UsersTableSeeder::class);
        factory(App\User::class, 2)->create();
        factory(App\Model\Product::class, 10)->create();
        factory(App\Model\Review::class, 500)->create();
        factory(App\Model\Order::class, 20)->create();
        factory(App\Model\OrderItem::class, 90)->create();
    }
}
