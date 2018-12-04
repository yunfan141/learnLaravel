@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      you now see <a href="https://laravel-china.org/courses/laravel-essential-training-5.5">Laravel sample</a> home page。
    </p>
    <p>
      learn learn learn 。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign Up Now</a>
    </p>
  </div>
@stop