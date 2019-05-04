@extends('guru.layout')

@section('title', 'Guru - Pengumuman/Create')

@section('unique-css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Guru</li>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Pengumuman</li>
</ol>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        Edit Pengunguman
      </div>
      <div class="card-body">
        @include('guru.shared.components.validation-alert')
        @include('guru.pengumuman.partials.form-update')
      </div>
    </div>
  </div>
@endsection

@section('unique-js')
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script type="text/javascript">
      $(".date, .date").flatpickr({
          dateFormat: "Y-m-d",
      });
  </script>
@endsection
