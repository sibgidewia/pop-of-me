@extends('layouts.app')

@section('title', 'Hubungi Kami - Pop Of Me')

@section('content')
    <div class="text-center mt-16 px-6">
        <h1 class="font-serif text-4xl md:text-5xl font-medium tracking-wide text-[#4A3525] uppercase">KONTAK</h1>
        <p class="text-xs md:text-sm text-[#4A3525]/70 mt-3 max-w-md mx-auto">
            Punya pertanyaan seputar produk atau pemesanan? Hubungi kami lewat media sosial resmi di bawah ini.
        </p>
    </div>

    <div class="max-w-6xl mx-auto px-8 my-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            
            <a href="https://instagram.com/popofme.id" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-[2.5rem] p-10 flex flex-col items-center justify-center text-center shadow-sm h-[420px] border border-transparent hover:border-[#8A684B]/20 hover:shadow-md hover:-translate-y-1 transition-all duration-500 group block">
                <div class="text-[#4A3525] text-5xl mb-10 transition-transform duration-500 group-hover:scale-110 group-hover:text-[#E1306C]">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="space-y-2">
                    <p class="text-[#4A3525]/60 font-sans text-xs uppercase tracking-widest font-semibold">Instagram</p>
                    <p class="text-[#4A3525] font-serif text-2xl font-medium pt-1">@popofme.id</p>
                </div>
                <span class="mt-8 text-xs font-semibold text-[#8A684B] opacity-0 group-hover:opacity-100 transition-opacity duration-300">Kunjungi Profil →</span>
            </a>

            <a href="https://wa.me/6282323942972?text=Halo%20Pop%20Of%20Me,%20saya%20ingin%20bertanya%20tentang%20produk%20aksesorisnya" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-[2.5rem] p-10 flex flex-col items-center justify-center text-center shadow-sm h-[420px] border border-transparent hover:border-[#8A684B]/20 hover:shadow-md hover:-translate-y-1 transition-all duration-500 group block">
                <div class="text-[#4A3525] text-5xl mb-10 transition-transform duration-500 group-hover:scale-110 group-hover:text-[#25D366]">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="space-y-2">
                    <p class="text-[#4A3525]/60 font-sans text-xs uppercase tracking-widest font-semibold">WhatsApp</p>
                    <p class="text-[#4A3525] font-serif text-2xl font-medium pt-1">082323942972</p>
                </div>
                <span class="mt-8 text-xs font-semibold text-[#8A684B] opacity-0 group-hover:opacity-100 transition-opacity duration-300">Kirim Pesan →</span>
            </a>

            <a href="https://tiktok.com/@popofme.id" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-[2.5rem] p-10 flex flex-col items-center justify-center text-center shadow-sm h-[420px] border border-transparent hover:border-[#8A684B]/20 hover:shadow-md hover:-translate-y-1 transition-all duration-500 group block">
                <div class="text-[#4A3525] text-5xl mb-10 transition-transform duration-500 group-hover:scale-110 group-hover:text-black">
                    <i class="fab fa-tiktok"></i>
                </div>
                <div class="space-y-2">
                    <p class="text-[#4A3525]/60 font-sans text-xs uppercase tracking-widest font-semibold">Tiktok</p>
                    <p class="text-[#4A3525] font-serif text-2xl font-medium pt-1">@popofme.id</p>
                </div>
                <span class="mt-8 text-xs font-semibold text-[#8A684B] opacity-0 group-hover:opacity-100 transition-opacity duration-300">Tonton Video →</span>
            </a>

        </div>
    </div>
@endsection