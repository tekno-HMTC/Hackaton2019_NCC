<form action="{{ Route('guru.pengumuman.update', [$pengumuman->id]) }}" method="post" enctype="multipart/form-data">
  @method('put')
  @csrf
  <div class="form-group">
      <div class="row">
          <div class="col-md-6">
              <label for="kelas">Kelas</label>
              <select class="form-control" name="kelas_id" required>
                  @foreach ($kelases as $key => $value)
                      <option value="{{ $value->id }}" {{ $pengumuman->kelas_id==$value->id?'selected':'' }}>{{ $value->name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" value="{{ $pengumuman->name }}" required>
          </div>
      </div>
  </div>
  <div class="form-group">
      <div class="row">
          <div class="col-md-6">
              <label for="tgltampil">Mulai</label>
              <input type="date" class="form-control date" name="tgltampil" value="{{ $pengumuman->tgltampil }}" required>
          </div>
          <div class="col-md-6">
              <label for="tglselesai">Selesai</label>
              <input type="date" class="form-control date" name="tglselesai" value="{{ $pengumuman->tglselesai }}" required>
          </div>
      </div>
  </div>
  <div class="form-group">
      <div class="row">
          <div class="col-md-6 offset-md-3">
              <label for="konten">Konten</label>
              <textarea name="konten" rows="8" cols="80" class="form-control" required>{{ $pengumuman->konten }}</textarea>
          </div>
      </div>
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
