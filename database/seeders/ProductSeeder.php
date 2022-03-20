<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date('Y-m-d');

        $snack = Category::whereName('Makanan Ringan')->first();
        $big = Category::whereName('Makanan Berat')->first();

        $products = [
            [
                'name' =>  'Keripik Otak-otak',
                'category_id' => $snack->id,
                'brand' => 'brand A',
                'unit' => 'pcs',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'name' =>  'Keripik Pisang',
                'category_id' => $snack->id,
                'brand' => 'brand B',
                'unit' => 'pcs',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'name' =>  'Daging merah',
                'category_id' => $big->id,
                'brand' => 'brand C',
                'unit' => 'kg',
                'created_at' => $today,
                'updated_at' => $today
            ],
            [
                'name' =>  'Roti gandum',
                'category_id' => $big->id,
                'brand' => 'brand D',
                'unit' => 'kg',
                'created_at' => $today,
                'updated_at' => $today
            ],
        ];

        Product::insert($products);
    }
}
