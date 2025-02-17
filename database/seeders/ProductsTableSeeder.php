<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Arroz', 'description' => 'Arroz de grão longo']);
        Product::create(['name' => 'Feijão', 'description' => 'Feijão preto']);
    }
}
