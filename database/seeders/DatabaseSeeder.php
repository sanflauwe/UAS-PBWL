<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Item;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->seed(123);

        for($i = 0; $i < 10; $i++){
            Item::create([
                'nama' => $faker->sentence,
                'harga' => $faker->randomFloat(0, 10000, 100000),
                'stok' => $faker->randomNumber(3),
            ]);
        }

        for ($i = 0; $i < 10; $i++){
            Order::create([
                'nama' => $faker->sentence,
                'harga' => $faker->randomFloat(0, 10000, 100000),
                'stok' => $faker->randomNumber(3),
            ]);
        }

        for ($i = 0; $i < 5; $i++){
            Order_Item::create([
                'order_id' => 1,
                'item_id' => 1,
                'quantity' => Order::find(1)->status()
            ]);
         }
    }
}
