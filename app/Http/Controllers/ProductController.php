<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function products(Request $request)
    {

    }

    public function productItem($id)
    {
        $user = null;
        if (Auth::check()) {
            $user = Auth::user();
        }
        $product = Product::where('id', $id)->first();
        $products = Product::query()->whereNot('id', $id)->limit(3)->get();

        return view('pages.products.item',
            [
                'product' => $product,
                'products' => $products,
                'user' => $user
            ]
        );
    }
}
