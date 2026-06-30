<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan data lama agar tidak menumpuk
        Product::truncate();

        $products = [
            [
                'name' => 'Gelang, Kalung, cincin & anting',
                'slug' => 'aksesoris-wanita',
                'category' => 'WANITA',
                'price' => 150000, // Silakan sesuaikan harganya nanti
                'description' => 'Gelang, Kalung, cincin & lainnya.',
                'image' => 'Wanita kalung 1 ( home ).png', 
            ],
            [
                'name' => 'Gelang, Kalung, cincin & lainnya.',
                'slug' => 'aksesoris-pria',
                'category' => 'PRIA',
                'price' => 135000, // Silakan sesuaikan harganya nanti
                'description' => 'Gelang, Kalung, cincin & lainnya.',
                'image' => 'pria gelang 1 ( home ).png', 
            ],
            [
                'name' => 'Koleksi terbaik ditujukan kepada anda',
                'slug' => 'koleksi-best-seller',
                'category' => 'Best Seller',
                'price' => 350000, // Silakan sesuaikan harganya nanti
                'description' => 'Koleksi terbaik ditujukan kepada anda',
                'image' => 'wanita gelang ( home ).png', 
            ],
            [
                'name' => 'Kategori terbaru untuk kamu',
                'slug' => 'koleksi-new-arrival',
                'category' => 'New Arrival',
                'price' => 199000, // Silakan sesuaikan harganya nanti
                'description' => 'Kategori terbaru untuk kamu',
                'image' => 'pria kalung ( home ).png', 
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}