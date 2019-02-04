<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Larashop</a>
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('products.index')}}">Products <span class="sr-only">(current)</span></a>
    </li>


  </ul>
  <ul class="navbar-nav">
    @if ( Request::is('products') )
      <li class="nav-item">
        <a href="{{route('products.create')}}" class="nav-link">Add Product  <i class="fa fa-plus fa-lg"></i></a>
      </li>
    @endif

  @if (auth()->check())
    <li class="nav-item">
      <a class="nav-link" href="{{route('cart.index')}}" >Shopping Cart <i class="fa fa-shopping-cart fa-lg"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="/logout">Logout <span class="sr-only">(current)</span></a>
    </li>

  @else
    <li class="nav-item">
      <a class="nav-link" href="register">Register <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login">Login <span class="sr-only">(current)</span></a>
    </li>
  @endif
  </ul>
</nav>
