@extends('layouts.app-siswa')

@section('content')
<div class="hero-image2">
    <div class="hero-text">
        <div> <img src="{{asset('gambar/logologo.png')}}" height="70px" style="margin-top: 1%"></div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
    
            <div class="card-body">
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger text-center">
                        {{ $message }}
                    </div>
                @endif
                <form method="POST" action="{{ route('siswa.login.post') }}">
                    @csrf
    
                    <div class="form-group row">
                        <label for="nis" class="col-md-4 col-form-label text-md-right">{{ __('NIS') }}</label>
    
                        <div class="col-md-6">
                            <input id="nis" type="nis" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}" required autocomplete="nis" autofocus>
    
                            @error('nis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="pin" class="col-md-4 col-form-label text-md-right">{{ __('Pin') }}</label>
    
                        <div class="col-md-6">
                            <input id="pin" type="password" class="form-control @error('pin') is-invalid @enderror" name="pin" required autocomplete="current-password">
    
                            @error('pin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
