<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            'XS',
            'S',
            'M',
            'L',
            'XL',
            'XXL',
            'XXXL',
        ];

        foreach ($sizes as $sizeName) {
            Size::create([
                'name' => $sizeName,
            ]);
        }
    }
}
