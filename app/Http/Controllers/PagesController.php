<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function resumeDownload()
    {
        $file= public_path(). "/download/cv.pdf";
dd($file);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        return Storage::download($file, 'Resume.jpg', $headers);
    }

}
