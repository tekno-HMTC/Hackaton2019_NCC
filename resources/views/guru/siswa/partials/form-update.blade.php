<form action="{{ Route('guru.siswa.update', [$siswa->id]) }}" method="post" enctype="multipart/form-data">
  @method('put')
  @csrf
  <div class="form-group">
      <div class="row">
          <div class="col-md-6">
              <label for="NIS">NIS</label>
              <input type="number" class="form-control" name="NIS" value="{{ $siswa->NIS }}" required>
          </div>
          <div class="col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" value="{{ $siswa->name }}" required>
          </div>
      </div>
  </div>
  <div class="form-group">
      <div class="row">
          <div class="col-md-6">
              <label for="kelas">Kelas</label>
              <select class="form-control" name="kelas_id" required>
                  @foreach ($kelases as $key => $value)
                      <option value="{{ $value->id }}" {{ $siswa->kelas_id==$value->id?'selected':'' }}>{{ $value->name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-6">
              <label for="no_telp">No Telp</label>
              <input type="number" class="form-control" name="no_telp" value="{{ $siswa->no_telp }}" required>
          </div>
      </div>
  </div>
  <div class="form-group">
      <div class="row">
          <div class="col-md-6 offset-md-3">
              <label for="name">Alamat</label>
              <textarea name="alamat" rows="8" cols="80" class="form-control" required>{{ $siswa->alamat }}</textarea>
          </div>
      </div>
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
