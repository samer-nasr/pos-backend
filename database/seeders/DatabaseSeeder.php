<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Item;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@live.com',
        ]);

        Category::factory()->create([
            'name' => 'Drinks',
        ]);

        Category::factory()->create([
            'name' => 'Chips',
        ]);

        Category::factory()->create([
            'name' => 'Snacks',
        ]);

        //Items for drinks category
        Item::factory()->create([
            'name' => 'Coke',
            'price' => 2,
            'quantity'=>20,
            'category_id'=>1
        ]);

        Item::factory()->create([
            'name' => 'Pepsi',
            'price' => 1.5,
            'quantity'=>20,
            'category_id'=>1
        ]);

        Item::factory()->create([
            'name' => 'Fanta',
            'price' => 2.2,
            'quantity'=>20,
            'category_id'=>1
        ]);


        //Items for chips category
        Item::factory()->create([
            'name' => 'Master',
            'price' => 3,
            'quantity'=>20,
            'category_id'=>2
        ]);

        Item::factory()->create([
            'name' => 'Sitos',
            'price' => 1.8,
            'quantity'=>20,
            'category_id'=>2
        ]);

        Item::factory()->create([
            'name' => 'Dolsi',
            'price' => 2.2,
            'quantity'=>20,
            'category_id'=>2
        ]);

        //Items for snacks category
        Item::factory()->create([
            'name' => 'Sneakers',
            'price' => 3,
            'quantity'=>20,
            'category_id'=>3
        ]);

        Item::factory()->create([
            'name' => 'Milka',
            'price' => 1.9,
            'quantity'=>20,
            'category_id'=>3
        ]);

        Item::factory()->create([
            'name' => 'Lotus',
            'price' => 2.2,
            'quantity'=>20,
            'category_id'=>3
        ]);

        //Create Carts
        Cart::factory()->create([
            'total-price' => 20
        ]);

        Cart::factory()->create([
            'total-price' => 30
        ]);

        //Create items for Cart 1
        CartItem::factory()->create([
            'name' => Item::find(1)->name,
            'price' => Item::find(1)->price,
            'cart_id' =>1
        ]);

        CartItem::factory()->create([
            'name' => Item::find(3)->name,
            'price' => Item::find(3)->price,
            'cart_id' =>1
        ]);

        //Create items for Cart 2
        CartItem::factory()->create([
            'name' => Item::find(2)->name,
            'price' => Item::find(2)->price,
            'cart_id' =>2
        ]);

        CartItem::factory()->create([
            'name' => Item::find(5)->name,
            'price' => Item::find(5)->price,
            'cart_id' =>2
        ]);

    }
}
