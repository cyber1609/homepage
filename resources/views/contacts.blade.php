@extends('layouts.main')

@section('content')
    <h1 class="text-center py-4">{{__('Contacts')}}</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 py-4">
                <section class="container text-md-left text-center">
                    <a class="text-decoration-none text-dark" href="tel:+37379735153">
                        <div class="row no-gutters mt-3">
                            <div class="col-1 text-center"><i class="fa fa-mobile fa-4x"></i></div>
                            <div class="col">
                                <div class="col-12">{{__('Telephone')}}</div>
                                <div class="col-12">+373 797 35 153</div>
                            </div>
                        </div>
                    </a>
                    <a class="text-decoration-none text-dark" href="mailto:cojocaru.ion.88@gmail.com">
                        <div class="row no-gutters mt-3">
                            <div class="col-1 text-center "><i class="fa fa-envelope fa-3x"></i></div>
                            <div class="col">
                                <div class="col-12">{{__('Email')}}</div>
                                <div class="col-12">cojocaru.ion.88@gmail.com</div>
                            </div>
                        </div>
                    </a>
                    <a class="text-decoration-none text-dark" href="https://www.facebook.com/cyber1609" target="_blank">
                        <div class="row no-gutters mt-3">
                            <div class="col-1 text-center text-primary"><i class="fa fa-facebook-square fa-3x"></i></div>
                            <div class="col d-flex align-items-center">
                                <div class="col-12">Facebook</div>
                            </div>
                        </div>
                    </a>
                    <a class="text-decoration-none text-dark" href="https://www.linkedin.com/in/ion-cojocaru-7a2095b3/" target="_blank">
                        <div class="row no-gutters mt-3">
                            <div class="col-1 text-center text-primary"><i class="fa fa-linkedin-square fa-3x"></i></div>
                            <div class="col d-flex align-items-center">
                                <div class="col-12">LinkedIn</div>
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-lg-7 py-4">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="text-center text-md-left text-light">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
            </div>
        </div>
    </div>



@endsection
