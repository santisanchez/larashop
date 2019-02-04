@extends('layout')

@section('content')
  <h1>Login</h1>
  <form method="POST" class="form-group" action="/login">
    @csrf
    <p>
      <input name="email" class="form-control" type="email" placeholder="Email">
      <small>{{$errors->first('email')}}</small>

    </p>
    <p>
      <input name="password" class="form-control" type="password" placeholder="Password">
      <small>{{$errors->first('password')}}</small>
    </p>
    <button class="btn btn-success" type="submit">Login</button>
  </form>
@endsection
