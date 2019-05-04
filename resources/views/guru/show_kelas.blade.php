@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-left">
              <div class="card-body">
                <h4 class="card-title">Data Kelas</h4>
                <p class="card-text">
                    Kelas : {{$kelas->name}}
                    <br>
                    Walikelas : 
                    <br>
                    Jumlah Siswa : {{$jumlah}}
                </p>
              </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        Pengunguman
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{route('pengunguman.create')}}">
                            Tambah pengunguman baru
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Judul Pengunguman</th>
                                <th>Tanggal Pengunguman</th>
                                <th>Selesai Pengunguman</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pengungumans as $pengunguman)
                            <tr>
                                <td scope="row">{{$pengunguman->name}}</td>
                                <td scope="row">{{$pengunguman->tgltampil}}</td>
                                <td scope="row">{{$pengunguman->tglselesai}}</td>
                                <td>
                                    <a class="btn btn-primary" href="">
                                        Lihat
                                    </a>
                                    <a class="btn btn-primary" href="{{route('pengunguman.delete')}}">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-header">Siswa</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table table-bordered table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>PIN</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                                <td scope="row">{{$siswa->NIS}}</td>
                                <td scope="row">{{$siswa->name}}</td>
                                <td scope="row">{{$siswa->pin}}</td>
                                <td>   
                                <a class="btn btn-primary" href="{{route('siswa.show',$siswa)}}">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
