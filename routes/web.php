<?php
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriakController;






Route::get('/etelek', [EtelController::class, 'etelek'])->name('etelek');

Route::get('/about', [TemplateController::class, 'about'])->name('about');

Route::get('/receptek', [TemplateController::class, 'receptek'])->name('receptek');

Route::get('/services', [TemplateController::class, 'services'])->name('services');

Route::get('/blog', [TemplateController::class, 'blog'])->name('blog');

Route::get('/contact', [TemplateController::class, 'contact'])->name('contact');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/receptek/{id}', [EtelController::class, 'show'])->name('etel.megnezem');

Route::get('/kategoriak/{id}', [KategoriakController::class, 'show'])->name('kategoriak.show');
