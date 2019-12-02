@extends('layouts.app')

@section('title', 'Tambah Recipes')

@section('content')

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Recipes</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Resep</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($recipes as $recipe)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $recipe->name }}</td>
              <td>{{ $recipe->category }}</td>
              <td>
                <form action="{{ url('/dashboard/delete-recipe') }}" method="post">
                  @csrf
                  <button class="btn btn-danger" type="submit" value="{{ $recipe->id }}" name="id">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection
