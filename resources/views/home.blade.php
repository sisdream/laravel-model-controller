@extends('layout.app')

@section('main')

<div class="container">
  @foreach ($movies as $movie)
  <div class="card">
    <div class="content-card">
      <div class="title">
        <h1>{{ $movie-> title }}</h1>
        <h3>{{ $movie-> original_title }}</h3>
      </div>
      <div class="info">
        <h5>{{ $movie-> nationality }}</h5>
        <p>{{ $movie-> date }}</p>
        <p>{{ $movie-> vote }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
