<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $colors = [
                    ['name' => 'Red', 'hex' => '#FF0000'],
                    ['name' => 'Blue', 'hex' => '#0000FF'],
                    ['name' => 'Green', 'hex' => '#008000'],
                    ['name' => 'Yellow', 'hex' => '#FFFF00'],
                    ['name' => 'Black', 'hex' => '#000000'],
                    ['name' => 'White', 'hex' => '#FFFFFF'],
                    ['name' => 'Orange', 'hex' => '#FFA500'],
                    ['name' => 'Purple', 'hex' => '#800080'],
                    ['name' => 'Pink', 'hex' => '#FFC0CB'],
                    ['name' => 'Brown', 'hex' => '#A52A2A'],
                    ['name' => 'Gray', 'hex' => '#808080'],
                    ['name' => 'Cyan', 'hex' => '#00FFFF'],
                    ['name' => 'Magenta', 'hex' => '#FF00FF']
                ];

                foreach ($colors as $color) {
                    Color::create([
                        'name' => $color['name'],
                        'hex' => $color['hex'],
                    ]);
                }
    }
}
