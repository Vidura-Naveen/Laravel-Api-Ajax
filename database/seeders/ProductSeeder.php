<?php

namespace Database\Seeders;
use App\Models\ProductRestApi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductRestApi::create([
            'name' => 'Sample Product 1',
            'description' => 'Description for product 1',
            'price' => 49.99
        ]);

        ProductRestApi::create([
            'name' => 'Sample Product 2',
            'description' => 'Description for product 2',
            'price' => 79.99
        ]);
    }
}
