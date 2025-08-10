<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

Route::get('/profile', function () {
    return view('frontend.profile');
})->name('profile');

Route::get('/categories', function () {
    return view('frontend.categories');
})->name('categories');

Route::get('/single-blog', function () {
    return view('frontend.single-blog');
})->name('single-blog');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

