@extends('layouts.app-client')

@section('title', 'Login')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="blog-text">
        <form method="POST" action="{{ route('login') }}" class="comment-form">
          @csrf
          <h3>Login</h3>
          <div class="row">
            <div class="col-md-12">
              <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-12">
              <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <button type="submit">
            {{ __('Login') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
