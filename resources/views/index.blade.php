@extends('layouts.main')

@section('content')


<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
{{--        <ol class="carousel-indicators">--}}
{{--            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--        </ol>--}}
        <div class="carousel-inner">
            <div class="carousel-item active h-auto mt-3">
                <img class="first-slide w-100" src="/img/dacia.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                       {{-- <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
{{--        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>--}}
    </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Hello world!</h1>
                <p class="lead">My name is Ion Cojocaru and I am happy to welcome you on my web-page!</p>
{{--                <p class="lead">I am currently working as a dispatcher at SE Moldelectrica, which is the Transmission System Operator of Moldova. I have finished the Harvard CS50: Introduction to Computer Science course and started the Harvard CS50W: Web Programming with Python and JavaScript course. I have accomplished 3 tasks, but started learning PHP and obtained some (beginner) skills in Laravel and Symfony frameworks. I want to expand my knowledge and potentially change my field of work.</p>--}}
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-4">--}}
{{--                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">--}}
{{--                <h2>Heading</h2>--}}
{{--                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>--}}
{{--                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">--}}
{{--                <h2>Heading</h2>--}}
{{--                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>--}}
{{--                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">--}}
{{--                <h2>Heading</h2>--}}
{{--                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>--}}
{{--                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <hr class="featurette-divider">--}}

{{--        <div class="row featurette">--}}
{{--            <div class="col-md-7">--}}
{{--                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>--}}
{{--                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-5">--}}
{{--                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <hr class="featurette-divider">--}}

{{--        <div class="row featurette">--}}
{{--            <div class="col-md-7 order-md-2">--}}
{{--                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>--}}
{{--                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-5 order-md-1">--}}
{{--                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <hr class="featurette-divider">--}}

{{--        <div class="row featurette">--}}
{{--            <div class="col-md-7">--}}
{{--                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>--}}
{{--                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
{{--            </div>--}}
{{--            <div class="col-md-5">--}}
{{--                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <hr class="featurette-divider">--}}
</main>
@endsection


