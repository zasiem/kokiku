@extends('layouts.app-client')

@section('title', 'Profile')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="blog-text">
        <form method="POST" action="{{ url('/edit-profile') }}" class="comment-form">
          @csrf
          <h3>Profile</h3>
          <div class="row">
            <div class="col-md-12">
              <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Nama">
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-12">
              <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" disabled>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-12">
              <input id="address" type="text" class="@error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" autocomplete="address" placeholder="Alamat">
              @error('address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-12 filter-table mb-3">
              <select id="category" class="w-100" name="sex">
                @if($user->sex == "Laki-laki")
                <option value="Laki-laki" selected>Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                @elseif($user->sex == "Perempuan")
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan" selected>Perempuan</option>
                @else
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                @endif
              </select>
            </div>
            <div class="col-md-12">
              <input id="phone" type="text" class="@error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" autocomplete="phone" placeholder="Nomor Telfon">
              @error('phone')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>
    </form>
  </div>
  @endsection
