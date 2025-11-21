<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Kategoria;

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
  
    $kategoriak = Kategoria::with(['etelek' => function($query) {
        $query->inRandomOrder()->limit(3); 
    }])->get();

    return view('frontend.receptek', compact('kategoriak'));
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