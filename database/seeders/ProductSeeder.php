<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->title = "Action";
        $category->description = "";
        $category->save();

        $category = new Category();
        $category->title = "RPG";
        $category->description = "";
        $category->save();

        $category = new Category();
        $category->title = "Квесты";
        $category->description = "";
        $category->save();

        $category = new Category();
        $category->title = "Онлайн-игры";
        $category->description = "";
        $category->save();

        $category = new Category();
        $category->title = "Стратегии";
        $category->description = "";
        $category->save();


        $product = new Product();
        $product->title = "The Witcher 3: Wild Hunt";
        $product->price = "400";
        $product->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                  in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                  deserunt mollit anim id est laborum. Sed ut perspiciatis
                                  unde omnis iste natus error sit voluptatem";
        $product->image = "/img/cover/game-1.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Overwatch";
        $product->price = "420";
        $product->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                  in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                  deserunt mollit anim id est laborum. Sed ut perspiciatis
                                  unde omnis iste natus error sit voluptatem";
        $product->image = "/img/cover/game-2.jpg";
        $product->save();


        $categoryProduct = new ProductCategories();
        $categoryProduct->product_id = 1;
        $categoryProduct->category_id = 1;
        $categoryProduct->save();

        $categoryProduct = new ProductCategories();
        $categoryProduct->product_id = 1;
        $categoryProduct->category_id = 2;
        $categoryProduct->save();

        $categoryProduct = new ProductCategories();
        $categoryProduct->product_id = 2;
        $categoryProduct->category_id = 1;
        $categoryProduct->save();

        $categoryProduct = new ProductCategories();
        $categoryProduct->product_id = 2;
        $categoryProduct->category_id = 4;
        $categoryProduct->save();
    }
}
