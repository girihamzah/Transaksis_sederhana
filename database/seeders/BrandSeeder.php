<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert(
        [
            'id' => 1,
            'name' => 'Brand A'
        ],
        [
            'id' => 2,
            'name' => 'Brand B'
        ]
        );
    }
}
