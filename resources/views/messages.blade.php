@extends('layouts.main')
@section('content')
    <main role="main">
        <div id="resume">
            <div class="container">
                <h1 class="text-center py-4">Messages</h1>
                <table class="table table-bordered">
                    @foreach($messages as $message)
                        <tr>
                            <td>
                                <h3>Name: {{$message->name}}</h3>
                                <h5>e-mail: {{$message->email}}</h5>
                            </td>
                            <td>
                                <h4>{{$message->subject}}</h4>
                                <h5>{{$message->message}}</h5>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
@endsection
