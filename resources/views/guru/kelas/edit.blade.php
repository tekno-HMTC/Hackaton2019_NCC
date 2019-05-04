@extends('guru.layout')

@section('title', 'Guru - Kelas/Details')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Guru</li>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Kelas</li>
</ol>
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">Kelas Details</div>
      <div class="card-body">
        @include('guru.shared.components.validation-alert')
        @include('guru.kelas.partials.form-update')
      </div>
    </div>
  </div>
@endsection
