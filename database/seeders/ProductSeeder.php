<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            $category = Category::inRandomOrder()->first();

            if ($category) {
                Product::create([
                    'name' => 'Product ' . $i,
                    'description' => 'Description for Product ' . $i,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
