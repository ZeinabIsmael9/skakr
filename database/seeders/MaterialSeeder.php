<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            'Cotton',
            'Silk',
            'Denim',
            'Flannel',
            'Hemp',
            'Leather',
            'Linen',
            'Nylon',
            'Polyester',
            'Rayon',
            'Satin',
            'Wool'
        ];

        foreach ($materials as $materialName) {
            Material::create([
                'name' => $materialName,
            ]);
        }
    }
}
