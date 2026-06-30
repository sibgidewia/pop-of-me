<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk dari database MySQL kamu
        $products = Product::where('is_active', true)->get();

        // Mengirim data produk ke file view welcome.blade.php
        return view('welcome', compact('products'));
    }
}