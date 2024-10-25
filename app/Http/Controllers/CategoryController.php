<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('tracks')->get();
        return view('app.categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $tracks = $category->tracks()->paginate(15);
        return view('app.categories.show', compact('category', 'tracks'));
    }
}

