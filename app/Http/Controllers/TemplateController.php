<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TemplateController extends Controller
{
   public function index()
   {
    return view('frontend.home');
   }

public function about()
{
    return view('frontend.about');
}

public function receptek()
{
    return view('frontend.receptek');
}

public function services()
{
    return view('frontend.services');
}

public function blog()
{
    return view('frontend.blog');
}


public function contact()
{
    return view('frontend.contact');
}



}