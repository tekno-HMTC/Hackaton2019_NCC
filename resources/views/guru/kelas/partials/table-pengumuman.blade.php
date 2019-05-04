<table class="table table-responsive-sm table-striped myTable">
  <thead>
    <th>#</th>
    <th>Nama</th>
    <th>Tanggal Tampil</th>
    <th>Tanggal Selesai</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach ($kelas->pengumuman as $value)
      <tr>
        <td>{{ $no_pengumuman++ }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->tgltampil }}</td>
        <td>{{ $value->tglselesai }}</td>
        <td style="text-align:center;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-list"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="{{ Route('guru.pengumuman.edit', $value->id) }}" class="nav-link">Edit</a></li>
            <li><a href="{{ Route('guru.pengumuman.show', $value->id) }}" class="nav-link">Content</a></li>
            <li><a href="#" data-toggle="modal" data-target="#delConfModal" data-action="{{ Route('guru.pengumuman.destroy', $value->id) }}" onclick="delete_action($(this).data('action'))" class="nav-link">Delete</a></li>
          </ul>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
