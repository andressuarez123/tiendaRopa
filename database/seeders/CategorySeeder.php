<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category;
        $category->name = 'Hombre';
        $category->description = 'ropa deportiva de Hombre';
        $category->save();

        $category = new Category;
        $category->name = 'Mujer';
        $category->description = 'Ropa deportiva de Mujer';
        $category->save();
    }
}
