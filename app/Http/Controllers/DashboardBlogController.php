<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBlogController extends Controller
{
    public function index(Blog $blog)
    {
        return view('dashboard.blogs.index', [
            "title" => "All blogs",
            "blogs" => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('dashboard.blogs.create', [
            "title" => "Add blog",
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'category_id' => 'required',
            'image' => 'image|file|max:3072',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Blog::create($validatedData);
        return redirect('/dashboard/blogs')->with('success', 'New blog has been added!');
    }

    public function show(Blog $blog)
    {
        return view('dashboard.blogs.show', [
            "title" => "Single Blog",
            "blog" => $blog
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit', [
            "title" => "Edit Blog",
            'blog' => $blog,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:3072',
            'body' => 'required'
        ];

        if ($request->slug != $blog->slug) {
            $rules['slug'] = 'required|unique:blogs';
        }

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('image')) {
            if ($blog->image != null) Storage::delete($blog->image);
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        Blog::where('id', $blog->id)->update($validatedData);
        return redirect('/dashboard/blogs')->with('success', 'Blog has been updated!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }

        Blog::destroy($blog->id);
        return redirect('/dashboard/blogs')->with('success', 'Blog has been deleted!');
    }
}
