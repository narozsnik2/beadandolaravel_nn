<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        
        $messages = auth()->user()->messages ?? [];
        return view('frontend.messages', compact('messages'));
    }
}
