<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::query()->paginate($request->input('per_page', 15));
        return view('admin.pages.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect('/admin/category');
    }

    public function show($id)
    {
        $category = Category::query()->where('id', $id)->first();
        return view('admin.pages.categories.show', [
            'category' => $category
        ]);
    }

    public function edit($id)
    {
        $category = Category::query()->where('id', $id)->first();
        return view('admin.pages.categories.update', [
            'category' => $category
        ]);
    }

    public function update($id, Request $request)
    {
        $category = Category::where('id', $id)->first();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect('/admin/category');
    }

    public function destroy(Category $category)
    {
        $category->link()->delete();
        $category->delete();
        return redirect('/admin/category');
    }

}
