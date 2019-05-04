<form action="{{ Route('guru.kelas.update', [$kelas->id]) }}" method="post" enctype="multipart/form-data">
  @method('put')
  @csrf
  <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control" name="name" value="{{ $kelas->name }}" required>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
