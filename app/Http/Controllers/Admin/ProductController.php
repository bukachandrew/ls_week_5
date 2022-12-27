<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()->paginate($request->input('per_page', 15));
        return view('admin.pages.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::query()->get();
        return view('admin.pages.products.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $src = '';
        if ($request->has('image')) {
            $src = '/storage/'.Storage::putFileAs(date('y/m/d/h/i/s'), $request->image, rand(1000, 9999).'.'.$request->image->extension());
        }
        $product->image = $src;
        $product->save();
        return redirect('/admin/product');
    }

    public function show($id)
    {
        $product = Product::query()->where('id', $id)->first();
        return view('admin.pages.products.show', [
            'product' => $product
        ]);
    }

    public function edit($id)
    {
        $product = Product::query()->where('id', $id)->first();
        return view('admin.pages.products.update', [
            'product' => $product
        ]);
    }

    public function update($id, Request $request)
    {
        $product = Product::where('id', $id)->first();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $src = '';
        if ($request->has('image')) {
            $src = '/storage/'.Storage::putFileAs(date('y/m/d/h/i/s'), $request->image, rand(1000, 9999).'.'.$request->image->extension());
        }
        $product->image = $src;
        $product->save();
        return redirect('/admin/product');
    }

    public function destroy(Product $product)
    {
        $product->link()->delete();
        $product->delete();
        return redirect('/admin/product');
    }
}
