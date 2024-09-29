<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return response()->json($items);
    }

    public function category_items()
    {
        $items = Category::with('items')->get();

        return response()->json($items);
    }
}
