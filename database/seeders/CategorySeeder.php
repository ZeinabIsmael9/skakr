<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
//            'Men',
//            'Women',
//            'Children',
//            'Accessories',
//            'Footwear',
//            'Formal',
//            'Casual',
//            'Sportswear',
//            'Outerwear',
//            'Swimwear',
//            'Sleepwear',
            'Dress',
            'T-Shirts',
//            'Jeans',
            'Pants',
            'Shorts',
            'Sweaters',
            'Jackets',
            'Coats'
        ];
        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'deposit' => 100,
            ]);
        }
    }
}
