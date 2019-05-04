<form action="{{ Route('guru.kelas.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
