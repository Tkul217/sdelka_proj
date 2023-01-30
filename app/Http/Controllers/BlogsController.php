<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\BlogRequest;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->paginate(10);
        return view('dashboard.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.blogs.create');
    }

    public function store(BlogRequest $request)
    {
        $data = $request->validated();
        $image = $request->file('image')->store('public/blogs');
        $data['image'] = $image;
        Blog::create($data);
        return redirect()->route('dashboard.blogs.index');
    }

    public function show(Blog $blog)
    {
        return view('dashboard.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit', compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        \Storage::delete($blog->image);
        $data = $request->validated();
        $image = $request->file('image')->store('public/blogs');
        $data['image'] = $image;
        $blog->update($data);
        return redirect()->route('dashboard.blogs.index');
    }

    public function destroy(Blog $blog)
    {
        \Storage::delete($blog->image);
        $blog->delete();
        return redirect()->route('dashboard.blogs.index');
    }
}
