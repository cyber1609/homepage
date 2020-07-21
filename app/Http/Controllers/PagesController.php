<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function resume()
    {
        return view('resume');
    }

    public function photos()
    {
        return view('photos');
    }

    public function contacts()
    {
        return view('contacts');
    }

}
