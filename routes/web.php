<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Home::class)->name('home');
Route::get('/about', App\Livewire\About::class)->name('about');
Route::get('/contact', App\Livewire\Contact::class)->name('contact');
Route::get('/dentist', App\Livewire\Dentist::class)->name('dentist');
Route::get('/blog', App\Livewire\Blog::class)->name('blog');
Route::get('/insurance', App\Livewire\Insurance::class)->name('insurance');