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
            'Cardigan',
            'Skirts',
            'Dress',
            'Hoodies',
            'Blouses',
            'Sets',
            'Basics',
            'Pants',
            'Home Wear',
        ];
        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'deposit' => 100,
            ]);
        }
    }
}
