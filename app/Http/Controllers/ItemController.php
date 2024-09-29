<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
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

    public function carts()
    {
        $carts = Cart::with('items')->get();

        return response()->json($carts);
    }

    public function cart($id)
    {
        $carts = Cart::with('items')->find($id);

        return response()->json($carts);
    }

    public function add_cart(Request $request)
    {
        $cart = Cart::create([
            'total-price' => $request->total_price
        ]);

        return response()->json([
            'message ' => 'cart created successfully',
            'id' => $cart->id
        ]);
    }

    public function add_cartItem(Request $request)
    {
        CartItem::create([
            'name' => $request->name,
            'price' => $request->price,
            'cart_id' => $request->cart_id
        ]);

        return response()->json([
            'message ' => 'cart items created successfully'
        ]);
    }


}
