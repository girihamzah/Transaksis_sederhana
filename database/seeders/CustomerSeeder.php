<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Giri Hamzah',
            'email' => 'girihamza04@gmail.com',
            'phone' => '088213309086',
            'address' => 'Kp. Kenangan Masa Lalu RT/RW 00/001',
        ]);
    }
}
