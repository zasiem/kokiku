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
            <div class="col-md-12 filter-table mb-3">
              <select class="btn btn-outline-secondary w-100" name="jml_bahan">
                <option value="">Masukan Jumlah Bahan</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="col-md-12" id="bahan_section"></div>
            <div class="col-md-12 filter-table mb-3">
              <select class="btn btn-outline-secondary w-100" name="jml_alat">
                <option value="">Masukan Jumlah Alat</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="col-md-12" id="alat_section"></div>
            <div class="col-md-12 filter-table mb-3">
              <select class="btn btn-outline-secondary w-100" name="jml_tutorial">
                <option value="">Masukan Jumlah Tutorial</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="col-md-12" id="tutorial_section"></div>
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

$("select[name='jml_bahan']").on("change", function() {
  var banyak = $("select[name='jml_bahan']").val();
  $("#bahan_section").empty();
  for (var i = 1; i <= banyak; i++) {
    $("#bahan_section").append('<input type="text" name="bahan[]" required placeholder="Masukan Bahan '+i+' ">');
  }
});

$("select[name='jml_alat']").on("change", function() {
  var banyak = $("select[name='jml_alat']").val();
  $("#alat_section").empty();
  for (var i = 1; i <= banyak; i++) {
    $("#alat_section").append('<input type="text" name="alat[]" required placeholder="Masukan Alat '+i+' ">');
  }
});

$("select[name='jml_tutorial']").on("change", function() {
  var banyak = $("select[name='jml_tutorial']").val();
  $("#tutorial_section").empty();
  for (var i = 1; i <= banyak; i++) {
    $("#tutorial_section").append('<input type="text" name="tutorial[]" required placeholder="Masukan Tutorial '+i+' ">');
  }
});

</script>
@endpush
