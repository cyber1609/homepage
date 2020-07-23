    <!DOCTYPE html>
<html>
<head>
{{--    <title>{{$_title}}</title>--}}
    <title>Admin panel</title>
    @yield('head')
    <link rel="shortcut icon" type="image/png" href="/img/icons/favicon.png"/>
    <link href="{{mix('/css/app.css')}}" rel="stylesheet">
    @stack('head')
</head>
<body id="page-top">
@auth
    <div id="wrapper">
        @include('admin.includes.main_menu')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.includes.top_bar')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('admin.includes.footer')
        </div>
    </div>
@endauth
@guest
    @yield('content')
@endguest

@include('admin.includes.scroll_to_top')

<script src="{{mix('/js/app.js')}}"></script>

@stack('footer')
@stack('footer-after')
</body>
</html>
