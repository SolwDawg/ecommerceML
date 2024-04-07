<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Sunt nisi labore consequat culpa excepteur consequat occaecat.',
            'price' => 20.000,
            'quantity' => 3,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Qui ad incididunt eu adipisicing consectetur quis minim do ea duis in. Adipisicing tempor occaecat tempor id est sit incididunt minim. Officia amet adipisicing anim ipsum sit. Duis et dolor qui ipsum reprehenderit. Irure laboris aliqua pariatur sint. Reprehenderit enim sunt consectetur irure veniam nulla nulla.'
        ]);
    }
}
