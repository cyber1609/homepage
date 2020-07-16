<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="/img/icon.png">
    <title>My homepage</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>


@yield('content')

@include('includes.navigation')

@include('includes.footer')
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
