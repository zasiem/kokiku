@extends('layouts.app-client')

@section('title', 'Register')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="blog-text">
        <form method="POST" action="{{ route('register') }}" class="comment-form">
          @csrf
          <h3>Daftar</h3>
          <div class="row">
            <div class="col-md-12">
              <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-12">
              <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-12">
              <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-12">
              <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Password">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
          </button>
        </div>
      </div>
    </form>
  </div>
  @endsection
