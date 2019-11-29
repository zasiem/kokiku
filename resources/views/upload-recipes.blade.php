@extends('layouts.app-client')

@section('title', 'Upload Recipe')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="blog-text">
        <form method="POST" action="{{ url('/proses-upload-recipe') }}" class="comment-form" enctype="multipart/form-data">
          @csrf
          <h3>Upload Recipe</h3>
          <div class="row">
            <div class="col-md-12">
              <input id="name" type="text" name="name" required autofocus placeholder="Nama Resep">
            </div>
            <div class="col-md-12">
              <input id="duration" type="text" name="duration" required placeholder="Durasi Pembuatan ( Menit )">
            </div>
            <div class="col-md-12">
              <textarea name="description" placeholder="Deskripsi Pembuatan"></textarea>
            </div>
            <div class="col-md-12">
              <input id="kategori" type="text" name="category" required placeholder="Kategori">
            </div>
            <div class="col-md-12 mb-3">
              <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" required>
                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="custom-file">
                <input type="file" name="video" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih Video</label>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
            Upload
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@push('script')
<script type="text/javascript">
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endpush
