<?php
use Illuminate\Support\Facades\Route;

Route::view('/',         'home')->name('home');
Route::view('/login',    'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/contacto', 'contacto')->name('contacto');