<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function __construct(){

      if(!\Session::has('cart')) \Session::put('cart', array());

    }


    //Show Cart

    public function show(){

      $cart = \Session::get('cart');
      $total = $this->total();
      return view('cart',compact('cart','total'));
    }

    //add item

    public function add(Product $product){

      $cart = \Session::get('cart');
      $product->quantity = 1;
      $cart[$product->name] = $product;
      \Session::put('cart',$cart);

      return redirect()->route('cart-show');
    }

    //delete item

    public function delete(Product $product){

        $cart = \Session::get('cart');
        unset($cart[$product->name]);
        \Session::put('cart',$cart);

        return redirect()->route('cart-show');

    }

    //update item

    public function update(Product $product, $quantity){

        $cart = \Session::get('cart');
        $cart[$product->name]->quantity = $quantity;
        \Session::put('cart',$cart);

        return redirect()->route('cart-show');
    }

    //trash cart

    public function trash(){

      \Session::forget('cart');

      return redirect()->route('cart-show');
    }

    //total
    private function total(){

      $cart = \Session::get('cart');
      $total = 0;
      foreach ($cart as $item) {

        $total += $item->price * $item->quantity;

      }

      return $total;
    }

}
