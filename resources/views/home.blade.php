@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        Kelas
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{route('kelas.create')}}">
                            Tambah kelas baru
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
                                <th>Nama</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($kelass as $kelas)
                            <tr>
                                <td scope="row">{{$kelas->name}}</td>
                                <td>   
                                    <a class="btn btn-primary" href="{{route('kelas.show',$kelas)}}">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Siswa</div>

                    You are logged in as Guru!
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
                                <th>Kelas</th>
                                <th>PIN</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($siswas as $siswa)
                            <tr>
                                    <td scope="row">{{$siswa->NIS}}</td>
                                    <td scope="row">{{$siswa->name}}</td>
                                    <td scope="row">{{$siswa->kelas->name}}</td>
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
</div>
@endsection
