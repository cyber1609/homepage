<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit()
    {

        $this->validate(\request(), [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Message::create(\request()->all());

        return redirect()->back()->with('success', 'Message sent!');
    }

    public function index()
    {
        $messages = Message::all();
        return view('messages', compact('messages'));
    }
}
