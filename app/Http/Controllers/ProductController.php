<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth',['except'=>['index']]);
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $products = Product::all();

    return view('products.index',compact('products'));
  }

  public function filter(Request $request)
  {
    $products = Product::all();
    $searchField = $request->searchField;
    $products = $products->filter( function($value,$key){
      return $value === 4;
    });
    return view('products.index',compact('products'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('products.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    request()->validate([
      'name' => 'required',
      'price' => 'required',
      'description' => 'required',
      'stock' => 'required',
      'image_url' => 'required|image'
    ]);
    $product = new Product;
    $product->name = $request->name;
    $product->price = $request->price;
    $product->stock = $request->stock;
    $product->description = $request->description;
    $product->image_url = $request->file('image_url')->store('public');
    $product->save();
    // $product->create($request)
    // Product::create($request->all());


    return redirect()->route('products.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Product  $product
  * @return \Illuminate\Http\Response
  */
  public function show(Product $product)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Product  $product
  * @return \Illuminate\Http\Response
  */
  public function edit(Product $product)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Product  $product
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Product $product)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Product  $product
  * @return \Illuminate\Http\Response
  */
  public function destroy(Product $product)
  {
    //
  }
}
