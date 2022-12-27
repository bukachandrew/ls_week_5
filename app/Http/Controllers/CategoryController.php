<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {

    }

    public function category($id, Request $request)
    {
        $category = Category::query()->where('id', $id)->first();
        $products = $category->products()->paginate($request->input('per_page', 15));
        return view('pages.products.category',
            [
                'category' => $category,
                'products' => $products
            ]
        );
    }
}
