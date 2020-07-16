<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="/img/icon.png">
    <title>My homepage</title>
    <link href="{{secure_asset('css/app.css')}}" rel="stylesheet">
</head>
<body>


@yield('content')

@include('includes.navigation')

@include('includes.footer')
<script src="{{secure_asset('js/app.js')}}"></script>
</body>
</html>
