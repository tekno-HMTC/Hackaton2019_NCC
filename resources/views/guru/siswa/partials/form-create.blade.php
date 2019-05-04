<form action="{{ Route('guru.siswa.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="nis">NIS</label>
                <input type="number" class="form-control" name="nis" value="{{ old('nis') }}" required>
            </div>
            <div class="col-md-6">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="kelas">Kelas</label>
                <select class="form-control" name="kelas_id" required>
                    @foreach ($kelases as $key => $value)
                        <option value="{{ $value->id }}" {{ old('kelas_id')==$value->id?'selected':'' }}>{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="no_telp">No Telp</label>
                <input type="number" class="form-control" name="no_telp" value="{{ old('no_telp') }}" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <label for="name">Alamat</label>
                <textarea name="alamat" rows="8" cols="80" class="form-control" required>{{ old('alamat') }}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
