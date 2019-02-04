<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $cartList = Cart::all();
    return view('cart',compact('cartList'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $user = Auth::user();

    $cart = new Cart;
    $cart->user_id = $user->id;
    $cart->product_id = $request->product_id;
    $cart->save();

    return redirect()->route('cart.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Cart  $cart
  * @return \Illuminate\Http\Response
  */
  public function show(Cart $cart)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Cart  $cart
  * @return \Illuminate\Http\Response
  */
  public function edit(Cart $cart)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Cart  $cart
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Cart $cart)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Cart  $cart
  * @return \Illuminate\Http\Response
  */
  public function destroy(Cart $cart)
  {
    // $cart->delete();
    dd($cart);
    // return view('cart');
  }
}
