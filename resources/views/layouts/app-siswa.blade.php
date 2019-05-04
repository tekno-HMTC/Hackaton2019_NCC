<link rel="icon" href="{{asset('gambar/Pnya.png')}}" type="png" sizes="16x16">

<!DOCTYPE html>
<html>
<head>
<title>Practive</title>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>

<body>
    <div>
        @yield('content')
    </div>
</body>