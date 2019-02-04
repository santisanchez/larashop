@extends('layout')
@section('title','Products')
@section('content')
  <h1>Products</h1>
  <div class="container col-lg-1-12">
    @foreach ($products as $product)
      @if($loop->iteration === 1 || (($loop->iteration)-1)%3 ===0)
        <div class="row">
        @endif
        <div class="col">
          <div class="card bg-dark">
            <img class="card-img-top" src="{{Storage::url($product->image_url)}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-light">{{$product->name}}-<span class="price">${{$product->price}}<span></h5>
                <p class="card-text text-light">{{$product->description}}</p>
                <a href="#" class="btn btn-primary">Buy</a>
                @if(auth()->check())
                  <form method="POST" action="{{route('cart.store')}}" class="form-group">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">                    
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-shopping-cart"></i></button>
                  </form>
                @endif
              </div>
            </div>
          </div>
          @if($loop->iteration%3 === 0)
          </div>
        @endif
      @endforeach
    </div>


  @endsection
