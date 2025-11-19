<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/etelek', [App\Http\Controllers\EtelController::class, 'index']);

