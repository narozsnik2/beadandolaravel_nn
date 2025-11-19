<?php

namespace App\Http\Controllers;

use App\Models\Etel;
use Illuminate\Http\Request;

class EtelController extends Controller
{
    public function index()
    {
        
        $etelek = Etel::with('hozzavalok')->get();

       
        return view('etelek.index', ['etelek' => $etelek]);
    }
}