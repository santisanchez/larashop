@extends('layout')

@section('content')
  <div class="container">
    <form method="POST" class="form-group" action="{{route('products.store')}}" enctype="multipart/form-data">
      @csrf
      <p class="row">
        <input name="image_url" class="form-control col-4 offset-4" type="file" value="{{old('image_url')}}">
        <small>{{$errors->first('image')}}</small>
      </p>
      <p class="row">
        <input name="name" class="form-control col-4 offset-4" type="text" value="{{old('name')}}" placeholder="Name">
        <small>{{$errors->first('name')}}</small>
      </p>
      <p class="row">
        <input name="price" class="form-control col-4 offset-4" type="number" value="{{old('price')}}" placeholder="Price">
        <small>{{$errors->first('price')}}</small>
      </p>
      <p class="row">
        <input name="stock" class="form-control col-4 offset-4" type="number" value="{{old('stock')}}" placeholder="Quantity">
        <small>{{$errors->first('stock')}}</small>
      </p>
      <p class="row">
        <textarea name="description" class="form-control col-4 offset-4" placeholder="Description"></textarea>
        <small>{{$errors->first('password')}}</small>

      </p>
      <button class="btn btn-success col-4 offset-4" type="submit">Add Product</button>
    </form>
  </div>

@endsection
