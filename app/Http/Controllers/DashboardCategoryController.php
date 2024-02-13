<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.category.index', [
            "title" => "All blogs",
            "categories" => Category::latest()->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.category.create', [
            "title" => "All blogs",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'max:255',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($validatedData);
        return redirect('/dashboard/categories')->with('success', 'New category has been added!');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('dashboard.category.edit', [
            "title" => "Edit Category",
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        Category::where('id', $category->id)->update($validatedData);
        return redirect('/dashboard/categories')->with('success', 'Category has been updated!');
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/dashboard/categories')->with('success', 'Category has been deleted!');
    }
}
