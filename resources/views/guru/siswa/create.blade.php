@extends('guru.layout')

@section('title', 'Guru - Siswa/Create')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Guru</li>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Siswa</li>
</ol>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        Siswa Baru
      </div>
      <div class="card-body">
        @include('guru.shared.components.validation-alert')
        @include('guru.siswa.partials.form-create')
      </div>
    </div>
  </div>
@endsection
