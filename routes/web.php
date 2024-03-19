<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/nieuws/{news}', \App\Livewire\News\Show::class)->name('news.show');
