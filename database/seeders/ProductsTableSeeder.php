<?php

// database/seeders/ProductsTableSeeder.php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Factory;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $users = User::factory(20)->create();

        // Create categories
        $categories = Category::factory(20)->create();

        // For each user, create 5 products associated with that user
        $users->each(function ($user) use ($categories) {
            $products = Product::factory(50)->create(['user_id' => $user->id]);

            // Attach random categories to each product
            $products->each(function ($product) use ($categories) {
                // $randomCategories = $categories->random(rand(1, 3))->pluck('id')->toArray();
                // $product->categories()->attach($randomCategories);


                $categories = Category::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $product->categories()->attach($categories);
            });
        });
    }
}


