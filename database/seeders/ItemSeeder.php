<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Item;
use App\Models\Material;
use App\Models\Product;
use App\Models\Size;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Retrieve all models at once
        $products = Product::all();
        $colors = Color::all();
        $sizes = Size::all();
        $materials = Material::all();

        function randomTrueFalse1To3() {
            $random_number = rand(0, 3);
            return $random_number === 0;
        }

        // Check if any of the collections are empty
        if ($products->isEmpty() || $colors->isEmpty() || $sizes->isEmpty() || $materials->isEmpty()) {
            return;
        }

        // Iterate over each product
        foreach ($products as $product) {
            // Iterate over each color
            foreach ($colors as $color) {
                // Iterate over each size
                foreach ($sizes as $size) {
                    // Pick a random material
                    $material = $materials->random();

                    // Create a new item
                    $item = Item::create([
                        'product_id' => $product->id,
                        'color_id' => $color->id,
                        'size_id' => $size->id,
                        'material_id' => $material->id,
                        'original_price' => $faker->randomFloat(2, 10, 1000), // Random original price between 10 and 1000
                        'price' => $faker->randomFloat(2, 10, 1000), // Random price between 10 and 1000
                    ]);

                    // Add an image to the item
                    $item->addMediaFromUrl($faker->imageUrl())->toMediaCollection('item_images');

                    // Check for random condition within the loop
                    if (randomTrueFalse1To3()) {
                        break;  // Exit the loop immediately
                    }
                }

                if (randomTrueFalse1To3()) {
                    break;  // Exit the loop immediately
                }
            }
        }
    }
}
