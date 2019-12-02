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
        <form action="{{ url('/proses-like') }}" class="comment-form mt-3" method="post">
          @csrf
          <button class="btn btn-outline-danger" type="submit" value="{{ $recipe->id }}" name="id" style="width:100px;">Like</button>
        </form>
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
                <li>Likes : <span>{{ $recipe->likes }}</span></li>
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
  <div class="row justify-content-center mt-3">
    <div class="col-md-8">
      <div class="blog-text">
        <div class="blog-comment">
          <h3>Comments ({{ $recipe->comments->count() }})</h3>
          @foreach($recipe->comments as $comment)
          <div class="single-comment">
            <img src="{{ asset('images/user.png') }}" alt="">
            <ul>
              <li>{{ $comment->users->name }}</li>
            </ul>
            <p>{{ $comment->comment }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="blog-text">
        <form action="{{ url('/proses-comment') }}" class="comment-form" method="post">
          @csrf
          <h3>Tinggalkan Komentar</h3>
          <div class="row">
            <div class="col-lg-12">
              <textarea placeholder="Tuliskan Komentar" name="comments" required></textarea>
            </div>
          </div>
          <button type="submit" value="{{ $recipe->id }}" name="id">Komen</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
