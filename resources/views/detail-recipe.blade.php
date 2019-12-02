@extends('layouts.app-client')

@section('title', 'Recipes')

@section('content')
<section class="single-page-recipe spad">
  <div class="recipe-top">
    <div class="container-fluid">
      <div class="recipe-title">
        <h2>{{ $recipe->name }}</h2>
        <ul class="tags">
          <li>{{ $recipe->category }}</li>
        </ul>
      </div>
      <img src="{{ url('storage/'.$recipe->image) }}" alt="" height="450px" width="100%">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="ingredients-item">
          <div class="intro-item">
            <img src="{{ url('storage/'.$recipe->image) }}" alt="">
            <h2>{{ $recipe->name }}</h2>
            <div class="recipe-time">
              <ul>
                <li>Lama : <span>{{ $recipe->duration }} min</span></li>
              </ul>
            </div>
          </div>
          <div class="ingredient-list">
            <div class="list-item">
              <h5>Bahan dan Alat</h5>
              <div class="salad-list">
                <h6>Alat</h6>
                <ul>
                  @foreach($recipe->alat as $alat)
                  <li>{{ $alat->nama_alat }}</li>
                  @endforeach
                </ul>
              </div>
              <div class="salad-list">
                <h6>Bahan</h6>
                <ul>
                  @foreach($recipe->bahan as $bahan)
                  <li>{{ $bahan->nama_bahan }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="recipe-right">
          <div class="recipe-desc">
            <h3>Deskripsi</h3>
            <p>{{ $recipe->description }}</p>
          </div>
          <div class="instruction-list">
            <h3>Cara Membuat</h3>
            <ul>
              @foreach($recipe->tutorial as $tutorial)
              <li>
                <span>{{ $loop->iteration }}.</span>
                {{ $tutorial->tutorial }}
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection
