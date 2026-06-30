@extends('layouts.app')

@section('title', 'Aksesoris Pria & Wanita')

@section('content')
    <section id="beranda" class="relative w-full h-[550px] md:h-[620px] bg-cover bg-center flex items-center px-8 md:px-20 overflow-hidden" 
             style="background-image: linear-gradient(to right, rgba(234, 220, 201, 0.9) 35%, rgba(234, 220, 201, 0.2) 100%), url('https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?q=80&w=1974&auto=format&fit=crop');">
        
        <div class="max-w-2xl space-y-4 md:space-y-6 z-10">
            <p class="text-xs md:text-sm tracking-[0.2em] text-[#8A684B] font-bold uppercase">
                Aksesoris untuk Pria & Wanita
            </p>
            <h1 class="font-serif text-4xl md:text-6xl font-bold text-[#4A3525] leading-tight md:leading-[1.15]">
                Lengkapi Gayamu,<br>
                <span class="text-[#5E4D44]">Tunjukkan Dirimu.</span>
            </h1>
            <p class="text-xs md:text-sm text-[#4A3525]/90 leading-relaxed max-w-lg font-normal">
                Sulit menemukan aksesoris yang unik, stylish, and tetap terjangkau? Pop of Me hadir with koleksi aksesoris colorful & elegan untuk membuatmu tampil lebih percaya diri setiap hari.
            </p>
            <div class="pt-2">
                <a href="{{ route('kategori.index') }}" class="inline-flex items-center space-x-3 bg-[#4A3525] hover:bg-[#8A684B] text-[#EADCC9] font-medium text-xs md:text-sm py-2.5 px-6 rounded-md shadow-md transition-all duration-300 group">
                    <span>BELANJA SEKARANG</span>
                    <span class="group-hover:translate-x-1 transition-transform duration-300">→</span>
                </a>
            </div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#EADCC9]/40 via-transparent to-transparent pointer-events-none"></div>
    </section>

    <section id="kategori" class="w-full px-8 md:px-16 py-16 bg-[#EADCC9] scroll-mt-20">
        <div class="text-center mb-12">
            <h2 class="font-serif text-4xl md:text-5xl font-medium text-[#4A3525] tracking-wide">Koleksi</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            <div class="group relative h-[360px] rounded-[2rem] overflow-hidden bg-white shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-500 cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700" 
                     style="background-image: url('{{ asset('images/Wanita kalung 1 ( home ).png') }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white z-10 space-y-1">
                    <h3 class="font-sans text-sm font-semibold tracking-wider text-gray-200 uppercase">WANITA</h3>
                    <p class="text-[11px] text-gray-300/90 font-light leading-relaxed">Gelang, Kalung,<br>cincin & anting</p>
                </div>
            </div>

            <div class="group relative h-[360px] rounded-[2rem] overflow-hidden bg-white shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-500 cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700" 
                     style="background-image: url('{{ asset('images/pria gelang 1 ( home ).png') }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white z-10 space-y-1">
                    <h3 class="font-sans text-sm font-semibold tracking-wider text-gray-200 uppercase">PRIA</h3>
                    <p class="text-[11px] text-gray-300/90 font-light leading-relaxed">Gelang, Kalung,<br>cincin & lainnya.</p>
                </div>
            </div>

            <div class="group relative h-[360px] rounded-[2rem] overflow-hidden bg-white shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-500 cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700" 
                     style="background-image: url('{{ asset('images/wanita gelang ( home ).png') }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white z-10 space-y-1">
                    <h3 class="font-sans text-sm font-semibold tracking-wider text-gray-200 uppercase">Best Seller</h3>
                    <p class="text-[11px] text-gray-300/90 font-light leading-relaxed">Koleksi terbaik ditujukan<br>kepada anda</p>
                </div>
            </div>

            <div class="group relative h-[360px] rounded-[2rem] overflow-hidden bg-white shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-500 cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700" 
                     style="background-image: url('{{ asset('images/pria kalung ( home ).png') }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white z-10 space-y-1">
                    <h3 class="font-sans text-sm font-semibold tracking-wider text-gray-200 uppercase">New Arrival</h3>
                    <p class="text-[11px] text-gray-300/90 font-light leading-relaxed">Kategori terbaru<br>untuk kamu</p>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang-kami" class="w-full px-8 md:px-20 py-16 md:py-24 bg-[#EADCC9] scroll-mt-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="text-center md:text-left space-y-6 md:space-y-8">
                <div class="space-y-2">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-[#4A3525] tracking-wide">Tentang Kami</h2>
                    <p class="font-serif italic text-xl md:text-2xl text-[#8A684B] font-light">Pop Of Me</p>
                </div>
                <p class="text-sm md:text-base text-[#4A3525] leading-[1.8] max-w-xl mx-auto md:mx-0 text-justify md:text-left font-normal">
                    Pop of Me menghadirkan koleksi aksesoris elegan & kekinian untuk pria dan wanita. Lebih dari sekadar pelengkap gaya, produk kami adalah sentuhan 'pop' untuk merayakan keunikan jati dirimu. Tentukan warnamu, mulai ceritamu.
                </p>
            </div>

            <div class="flex flex-col gap-4 w-full max-w-2xl mx-auto">
                <div class="group relative h-[200px] md:h-[220px] rounded-2xl overflow-hidden bg-white shadow-sm">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700" 
                         style="background-image: url('{{ asset('images/aneka perhiasan ( home ).png') }}');"></div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="group relative aspect-[3/4] md:h-[380px] rounded-2xl overflow-hidden bg-white shadow-sm">
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700" 
                             style="background-image: url('{{ asset('images/kalung wanita 2 ( home ).png') }}');"></div>
                    </div>
                    <div class="group relative aspect-[3/4] md:h-[380px] rounded-2xl overflow-hidden bg-white shadow-sm">
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700" 
                             style="background-image: url('{{ asset('images/kalung pria 2 ( home ).png') }}');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection