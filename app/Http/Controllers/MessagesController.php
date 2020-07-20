<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit()
    {

        $this->validate(\request(), [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        return \request('email');
    }
}
