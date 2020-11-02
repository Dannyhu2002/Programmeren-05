<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::with('foodItems')->get();

        return view('categories.index', compact('categories'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');;
        $categories = Category::where('title', 'like', '%' . $search . '%')->get();
        return view('categories.index', ['categories' => $categories]);
    }
}
