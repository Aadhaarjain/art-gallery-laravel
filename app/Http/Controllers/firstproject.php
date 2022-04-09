<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstproject extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function gallery01()
    {
        return view('gallery01');
    }
    
    public function gallery02()
    {
        return view('gallery02');
    }
    public function gallery03()
    {
        return view('gallery03');
    }
    public function gallery04()
    {
        return view('gallery04');
    }
    public function gallery05()
    {
        return view('gallery05');
    }
    
}
