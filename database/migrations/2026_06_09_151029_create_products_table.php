<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');         // Nama produk (misal: Kalung Emas Aura)
            $table->string('slug')->unique(); // URL estetik (misal: kalung-emas-aura)
            $table->string('category');     // Kategori (wanita, pria, best-seller, new-arrival)
            $table->integer('price');       // Harga produk
            $table->text('description');    // Deskripsi detail produk
            $table->string('image');        // Nama file gambar produk
            $table->boolean('is_active')->default(true); // Status aktif/pajang produk
            $table->timestamps();           // Otomatis bikin kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
