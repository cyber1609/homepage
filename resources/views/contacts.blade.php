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

                    {!! Form::open(['route' => 'contacts.submit']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                {{Form::label('name', 'Name')}}
                                {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Jon Snow'])}}
                                @error('name')
                                <script>document.getElementById('name').classList.add('is-invalid')</script>
                                <div class="text-danger">{{$errors->first('name')}}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">

                                {{Form::label('email', 'E-Mail Address')}}
                                {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
                                @error('email')
                                <script>document.getElementById('email').classList.add('is-invalid')</script>
                                <div class="text-danger">{{$errors->first('email')}}</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                {{Form::label('subject', 'Subject')}}
                                {{Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Your subject here'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="md-form">

                                {{Form::label('message', 'Message')}}
                                {{Form::textarea('message', null, ['class' => 'form-control md-textarea', 'placeholder' => 'Leave me a message...', 'rows' => '5'])}}

                            </div>
                        </div>
                    </div>

                    <div class="text-center text-md-left text-light">

                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    </div>

                    {!! Form::close() !!}



                    <div class="status"></div>
                </div>
            </div>
        </div>
    </div>


@endsection
