<table class="table table-responsive-sm table-striped myTable">
  <thead>
    <th>#</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No Telp</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach ($kelas->siswas as $value)
      <tr>
        <td>{{ $no_siswa++ }}</td>
        <td>{{ $value->NIS }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->alamat }}</td>
        <td>{{ $value->no_telp }}</td>
        <td style="text-align:center;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-list"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="{{ Route('guru.siswa.edit', $value->id) }}" class="nav-link">Edit</a></li>
            <li><a href="{{ Route('guru.siswa.show', $value->id) }}" class="nav-link">Content</a></li>
            <li><a href="#" data-toggle="modal" data-target="#delConfModal" data-action="{{ Route('guru.siswa.destroy', $value->id) }}" onclick="delete_action($(this).data('action'))" class="nav-link">Delete</a></li>
          </ul>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
