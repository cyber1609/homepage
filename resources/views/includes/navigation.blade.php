<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{route('index')}}">Ion Cojocaru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link @if(Request::url() === route('index')) active @endif" href="{{route('index')}}"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::url() === route('resume')) active @endif" href="{{route('resume')}}"><i class="fa fa-fw fa-file"></i> Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::url() === route('photos')) active @endif" href="{{route('photos')}}"><i class="fa fa-fw fa-camera"></i> Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::url() === route('contacts')) active @endif" href="{{route('contacts')}}"><i class="fa fa-fw fa-envelope"></i> Contacts</a>
                </li>
            </ul>
{{--            <form class="form-inline mt-2 mt-md-0">--}}
{{--                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--            </form>--}}
        </div>
    </nav>
</header>
