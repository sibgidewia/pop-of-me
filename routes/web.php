<?php

use Illuminate\Support\Facades\Route;

// Route untuk Halaman Utama / Beranda
Route::get('/', function () {
    return view('home');
})->name('home');

// Route untuk Halaman Kategori
Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori.index');

// Route baru untuk Halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak.index');