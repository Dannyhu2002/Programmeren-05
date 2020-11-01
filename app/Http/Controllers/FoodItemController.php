<?php

namespace App\Http\Controllers;

use App\Category;
use App\FoodItem;
use Illuminate\Http\Request;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $foodItems = FoodItem::all();
        return view('food-items.index', compact('foodItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('food-items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
           // 'category' => ['exist:categories,id'],
        ]);

        $foodItem = new FoodItem();
        $foodItem->title = $request->get('title');
        $foodItem->description = $request->get('description');
        $foodItem->category_id = $request->get('category');
        $foodItem->image = $request->get('image');

        $foodItem->save();
        return redirect('food')->with('success','Food Post is saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foodItem = FoodItem::find($id);
        if($foodItem === null) {
            abort(404, "This food-item is unfortunately unavailable");
        }

        return view('food-items.show', compact('foodItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = FoodItem::find($id);

        return view('food-items.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = FoodItem::find($id);
        $data->update($request->all());
        return redirect()->route('food', compact('data'))->with('success', 'Food Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($food_items_id)
    {
        $foodItem = FoodItem::where('id', $food_items_id)->first();
        $foodItem->delete();
        return redirect()->route('food')->with('success', 'Food Post deleted!');
    }
}

