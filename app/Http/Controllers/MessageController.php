<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        // ide jöhet a logika, pl. az üzenetek lekérése az aktuális felhasználóhoz
        $messages = auth()->user()->messages ?? []; // feltételezve, hogy van messages kapcsolat
        return view('frontend.messages', compact('messages'));
    }
}
