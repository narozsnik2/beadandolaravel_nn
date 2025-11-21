<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etel;
use App\Models\Kategoria;

class EtelController extends Controller
{
    public function etelek()
    {
        $etelek = Etel::with('hozzavalok')->get();
        return view('etelek.index', compact('etelek'));
    }


    public function index()
    {
        
        $kategoriaRecept = Kategoria::with(['etelek' => function($query) {
            $query->inRandomOrder()->limit(1);
        }])->get();
    
        return view('frontend.home', compact('kategoriaRecept'));
    }

    public function store(Request $request)
    {
        $etel = new Etel();
        $etel->nev = $request->nev;
        $etel->kategoriaid = $request->kategoriaid;
    
   
        if ($request->hasFile('kep')) {
            $file = $request->file('kep');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/etelek', $filename);
            $etel->kep = $filename;
        } else {
            $etel->kep = null;
        }
    
        $etel->save();
    
        return redirect()->route('etelek')->with('success', 'Étel hozzáadva!');
    }
    

    public function show($id)
{
    $etel = Etel::with(['kategoria', 'hozzavalok'])->findOrFail($id);

    $masEtelek = Etel::where('kategoriaid', $etel->kategoriaid)
                      ->where('id', '<>', $etel->id)
                      ->inRandomOrder()
                      ->limit(3)
                      ->get();

    return view('frontend.etel_show', compact('etel', 'masEtelek'));
}

}