@extends('guru.layout')

@section('title', 'Guru - Kelas')

@section('unique-css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Guru</li>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Kelas</li>
    <li class="breadcrumb-item active">Detail</li>
</ol>
@endsection

@section('content')
@include('guru.shared.components.alert')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h3 class="card-title">Daftar Siswa</h3>
                </div>
                <div class="col">
                    <a href="{{ route('guru.siswa.create') }}" class="btn btn-primary float-right">New</a>
                </div>
            </div>
            <hr>
          @include('guru.kelas.partials.table-siswa')
        </div>
        @include('guru.shared.components.modal-delete')
    </div>
    <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col">
                  <h3 class="card-title">Daftar Pengumuman</h3>
              </div>
              <div class="col">
                  <a href="{{ route('guru.pengumuman.create') }}" class="btn btn-primary float-right">New</a>
              </div>
          </div>
          <hr>
        @include('guru.kelas.partials.table-pengumuman')
      </div>
      @include('guru.shared.components.modal-delete')
    </div>
</div>
@endsection

@section('unique-js')
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.myTable').DataTable();
    });
  </script>
  <script>
      function delete_action(action) {
          $('#btnDelete').data('action', action);
      }

      $('#btnDelete').on('click', function() {
          $('#formDelete').attr('action', $(this).data('action'));
          $('#formDelete').submit();
      })
  </script>
@endsection
