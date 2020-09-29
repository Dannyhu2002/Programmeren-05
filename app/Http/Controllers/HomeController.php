<?php

namespace App\Http\Controllers;

use App\Category;
use App\FoodItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show ()
    {
        $categories = Category::all();
        return view ('food-items/home', compact ('categories'));
    }
}
