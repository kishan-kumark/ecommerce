<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    //     $category = ['Electronics', 'Clothing', 'Home & Garden', 'Sports', 'Toys', 'Health & Beauty'];
    //     // foreach ($category as $cat) {
    //     //     $cat = Category::where('name', $cat)->first();
    //     //     if (!$cat) {
    //     //         Category::create([
    //     //             'name' => $cat,
    //     //         ]);
    //     // }

    //     foreach ($category as $cat) {
    //         $cat = new Category();
    //         $cat->name = $cat;
    //         $cat->save();
    //     }

    // }



    public function run(): void
{
    $categories = [
        'Electronics',
        'Clothing',
        'Home & Garden',
        'Sports',
        'Toys',
        'Health & Beauty',
    ];

    foreach ($categories as $cat) {
        Category::firstOrCreate([
            'name' => $cat,
        ]);
    }
}
}
