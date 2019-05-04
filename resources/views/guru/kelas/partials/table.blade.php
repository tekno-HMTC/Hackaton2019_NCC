<table id="myTable" class="table table-responsive-sm table-striped">
  <thead>
    <th>#</th>
    <th>Nama</th>
    <th>Jumlah Siswa</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach ($kelases as $value)
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ count($value->siswas) }}</td>
        <td style="text-align:center;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-list"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="{{ Route('guru.kelas.edit', $value->id) }}" class="nav-link">Edit</a></li>
            <li><a href="{{ Route('guru.kelas.show', $value->id) }}" class="nav-link">Content</a></li>
            <li><a href="#" data-toggle="modal" data-target="#delConfModal" data-action="{{ Route('guru.kelas.destroy', $value->id) }}" onclick="delete_action($(this).data('action'))" class="nav-link">Delete</a></li>
          </ul>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
