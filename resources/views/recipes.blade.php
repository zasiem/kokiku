@extends('layouts.app-client')

@section('title', 'Recipes')

@section('content')
<div class="container">
  <div class="row">
    @foreach($recipes as $recipe)
    <div class="col-lg-4 col-sm-6">
      <div class="recipe-item">
        <a href="{{ url('detail-recipe/'.$recipe->id) }}"><img src="{{ url('storage/'.$recipe->image) }}" alt="" height="350"></a>
        <div class="ri-text">
          <div class="cat-name">{{ $recipe->category }}</div>
          <a href="{{ url('detail-recipe/'.$recipe->id) }}">
            <h4>{{ $recipe->name }}</h4>
          </a>
          <p>{{ $recipe->description }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
