<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Sub_Category;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    $subCategories = [
        'Electronics' => [
            'Mobile Phones',
            'Laptops',
            'Cameras',
            'Televisions',
            'Headphones',
        ],
        'Clothing' => [
            "Men's Clothing",
            "Women's Clothing",
            "Children's Clothing",
            'Shoes',
            'Accessories',
        ],
    ];

    foreach ($subCategories as $categoryName => $subCategoryList) {

        $category = Category::where('name', $categoryName)->first();

        if ($category) {
            foreach ($subCategoryList as $subCategory) {
                Sub_Category::create([
                    'category_id' => $category->id,
                    'name' => $subCategory,
                ]);
            }
        }
    }
}

}
