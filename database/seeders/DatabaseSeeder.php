<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CategorySeeder::class,
            // ProductSeeder::class,
            UserSeeder::class,
            BrandSeeder::class,
            UnitSeeder::class,
            CustomerSeeder::class,
        ]);    
    }
}
