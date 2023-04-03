<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

use Cart;
class CartComponent extends Component
{
    public function addQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $quantity = $product->quantity +1;
        Cart::update($rowId,$quantity);
    }

    public function reduceQuantity($rowId){
        $product = Cart::get($rowId);
        $quantity = $product->quantity -1;
        Cart::update($rowId,$quantity);
    }
    
    public function render()
    {
        $products = Product::first();
        $most_viewed = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.cart-component',['products'=>$products,'most_viewed'=>$most_viewed])->layout("layouts.base");
    }
}
