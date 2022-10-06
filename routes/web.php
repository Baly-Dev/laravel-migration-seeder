<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteManager;

Route::get('/', [RouteManager::class, 'home'])->name('home');
Route::get('/trains', [RouteManager::class, 'trains'])->name('trains');
Route::get('/about-us', [RouteManager::class, 'about_us'])->name('about-us');
Route::get('/blog', [RouteManager::class, 'blog'])->name('blog');
