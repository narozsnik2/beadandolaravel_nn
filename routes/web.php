<?php
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtelController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etelek', [EtelController::class, 'index']);

Route::get('/home', [TemplateController::class, 'index'])->name('home');

Route::get('/about', [TemplateController::class, 'about'])->name('about');

Route::get('/receptek', [TemplateController::class, 'receptek'])->name('receptek');

Route::get('/services', [TemplateController::class, 'services'])->name('services');

Route::get('/blog', [TemplateController::class, 'blog'])->name('blog');

Route::get('/contact', [TemplateController::class, 'contact'])->name('contact');

Route::get('/home', [HomeController::class, 'index']);