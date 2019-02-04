@extends('layout')

@section('title','Cart')

@section('content')
  @foreach ($cartList as $article)
    <div class="row">
    	<div class="card col-md-12 p-3">
    		<div class="row ">
    			<div class="col-md-4">
    				<img class="w-100" src="{{Storage::url($article->product->image_url)}}">
    			</div>
    			<div class="col-md-8">
    				<div class="card-block">
    					<h6 class="card-title">{{$article->product->name}}</h6>
    					<p class="card-text text-justify">{{$article->product->description}}</p>
              <form action="{{route('cart.destroy',$article)}}" method="POST">
                @csrf                
                {{ method_field('DELETE') }}
                <button type='submit' class="btn btn-danger" value="Remove">Remove</button>
              </form>
    				</div>
    			</div>
    		</div>
    	</div>
  @endforeach
@endsection
{{-- <div class="card">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <div class="card-block">
        <img class="card-img" src="{{Storage::url($article->product->image_url)}}">
         --}}
        {{-- <h4 class="card-title">{{$article->user->name}}</h4> --}}
        {{-- <p class="card-text">{{$article->product->name}}</p>
        <form action="{{route('cart.destroy',$article)}}" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <button type='submit' class="btn btn-danger" value="Remove">Remove</button>
        </form> --}}
        {{-- <a href="{{route('cart.destroy',$article)}}" class="btn btn-danger">Remove</a> --}}
      {{-- </div>
    </li>
  </ul>
</div> --}}
