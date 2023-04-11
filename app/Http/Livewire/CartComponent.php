<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

use Cart;
class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $quantity = $product->quantity + 1;
        Cart::update($rowId,$quantity);
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $quantity = $product->quantity - 1;
        Cart::update($rowId,$quantity);
    }
    
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message','Product has been removed');
        return redirect()->route('product.cart');
    }

    public function destroyAll()
    {
        Cart::destroy();
    }

    public function render()
    {
        $products = Product::first();
        $most_viewed = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.cart-component',['products'=>$products,'most_viewed'=>$most_viewed])->layout("layouts.base");
    }
}
