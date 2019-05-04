@extends('layouts.app-siswa')

@section('content')
<div class="hero-image2">
    <div class="hero-text">
        <div style="margin-left: 80%;" class="c-dropdown">
        <button class="c-dropbtn" style="padding: 0% 50%">Profil</button>
        <div class="c-dropdown-content">
            <a href="#">{{Auth::user()->name}}</a> 
            <!-- JADI INI TUH TOLONG YA REQUEST NAMANYA YG DITAMPILIN NAMA DEPAN AJA SOALNYA BIAR BAGUS NANTI TAMPILANNYA :) -->
            <a href="#">{{Auth::user()->NIS}}</a>
            <a href="#">{{Auth::user()->kelas->name}}</a>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
        </div>
        <div> <img src="{{asset('gambar/logologo.png')}}" height="70px" style="margin-top: 1%"></div>
    <div id="todo_panel">
            <ul id="todo_list">
                @foreach ($pengumumans as $pengumuman)
                <div class="item" onclick="pengumumanAjax({{$pengumuman->id}})">{{$pengumuman->name}}</div>
                @endforeach
            </ul>
        </div>
        
    </div>
</div>

<div class="modal fade" id="showPengumuman" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pengungumanTitle" style="text-align: center">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <h5 id="pengungumanContent" style="text-align: center"></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function pengumumanAjax(id) {
        $.ajax({
            url: 'pengumuman/'+id,
            dataType: 'json',
            method: 'GET',
            success: function(data) {
                $('#pengungumanTitle').text(data.name);
                $('#pengungumanContent').text(data.konten);
                $('#showPengumuman').modal('show');
            }
        })
    }
</script>
@endsection
