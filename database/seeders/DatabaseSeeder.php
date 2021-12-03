<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Product;
use App\Models\User;
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
        Brand::factory()->count(30)->create();
        Category::factory()->count(50)->create();
        User::factory()->count(500)->create();
        Product::factory()->count(10000)->create();
        Order::factory()->count(1000)->create();
        Order_item::factory()->count(3000)->create();
    }
}
