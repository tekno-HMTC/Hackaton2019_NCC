@extends('guru.layout')

@section('title', 'Guru - Kelas - Pengunguman')

@section('unique-css')
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Guru</li>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Kelas</li>
    <li class="breadcrumb-item">Detail</li>
    <li class="breadcrumb-item active">Siswa</li>
</ol>
@endsection

@section('content')
@include('guru.shared.components.alert')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h3 class="card-title">{{$siswa->name}}</h3>
                </div>
            </div>
            <hr>
            <div>
                <h4>Awal Pengunguman : {{$siswa->NIS}}</h4>
                <h4>Kelas : {{$kelas->name}}</h4>
                <h4>Alamat : {{$siswa->alamat}}</h4>
                <h4>No Telp : {{$siswa->no_telp}}</h4>
                <h4>PIN : {{$siswa->pin}}</h4>
            </div>
            <button class="btn btn-error float-right" onclick="back()">Kembali</button>
        </div>
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
      function back() {
        window.history.back();
      }
  </script>
@endsection
