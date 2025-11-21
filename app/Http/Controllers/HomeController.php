<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etel;
use App\Models\Kategoria;

class HomeController extends Controller
{
    public function index()
{
    $kategoriak = ['Köret', 'Leves', 'Egytálétel', 'Húsétel', 'Főzelék', 'Tészta'];
   
    $randomEtelek = [];

    foreach ($kategoriak as $kategoriaNev) {
        $etel = Etel::whereHas('kategoria', function($q) use ($kategoriaNev) {
            $q->where('nev', $kategoriaNev);
        })->inRandomOrder()->first();

      
        if ($etel) {
            $randomEtelek[] = $etel;
        }
    }

    return view('frontend.home', compact('randomEtelek'));
}
}