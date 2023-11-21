<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Color;
use App\Models\Product;
use App\Models\Purchase;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $wassim = User::factory()->create([
            "name"=> "Wassim",
            "email"=> "wassimkh448@gmail.com",
            "password"=>"123456",
        ]);
        $product = Product::factory()->create();
        Purchase::factory(10)->create([
            "product_id"=>$product->id
        ]);
        Color::factory(10)->create();
        User::factory(10)->create();
        Product::factory(10)->create();
        Purchase::factory(10)->create(['user_id'=>$wassim->id]);
    }
}
