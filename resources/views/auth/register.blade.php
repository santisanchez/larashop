@extends('layout')
@section('title','Register')
@section('content')
  <h1>Register</h1>

  <form method="POST" class="form-group" action="{{route('register')}}">
    @csrf
    <p>
      <input name="name" class="form-control" type="text" value="{{old('name')}}" placeholder="Name">
      <small>{{$errors->first('name')}}</small>
    </p>
    <p>
      <input name="email" class="form-control" type="email" placeholder="Email" value="{{old('email')}}">
      <small>{{$errors->first('email')}}</small>

    </p>
    <p>
      <input name="password" class="form-control" type="password" placeholder="Password">
      <small>{{$errors->first('password')}}</small>

    </p>
    <p>
      <input name="password_confirmation" type="password"  class="form-control" placeholder="Repeat Password">
    </p>
    <button class="btn btn-success" type="submit">Register</button>
  </form>
@endsection
