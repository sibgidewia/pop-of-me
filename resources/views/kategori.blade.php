@extends('layouts.app')

@section('title', 'Kategori Aksesoris')

@section('content')
    <!-- ==================== HERO / JUDUL HALAMAN ==================== -->
    <div class="text-center mt-12 px-6">
        <h1 class="font-serif text-4xl md:text-5xl font-medium tracking-wide text-[#4A3225] uppercase">KATEGORI</h1>
        <p class="max-w-xl mx-auto text-[#61483B]/80 text-sm mt-4 leading-relaxed italic font-normal">
            Lengkapi gayamu dengan koleksi aksesori yang elegan dan penuh karakter. Karena detail kecil sering kali membuat penampilan menjadi lebih berkesan.
        </p>
    </div>

    <!-- ==================== FILTER TOMBOL (PRIA / WANITA) ==================== -->
    <div class="flex justify-center gap-4 mt-10 px-4">
        <button id="btn-semua" onclick="filterKategori('semua')" class="px-8 py-2 bg-[#4A3525] text-[#EADCC9] font-semibold rounded-full shadow-sm uppercase tracking-wider text-xs border border-[#4A3525] scale-105 transition-all duration-300 cursor-pointer">
            Semua
        </button>
        <button id="btn-pria" onclick="filterKategori('pria')" class="px-8 py-2 bg-[#D7BEA4] text-[#50341B] font-semibold rounded-full shadow-sm uppercase tracking-wider text-xs border border-transparent hover:bg-[#c2a78d] transition-all duration-300 cursor-pointer">
            Pria
        </button>
        <button id="btn-wanita" onclick="filterKategori('wanita')" class="px-8 py-2 bg-[#D7BEA4] text-[#50341B] font-semibold rounded-full shadow-sm uppercase tracking-wider text-xs border border-transparent hover:bg-[#c2a78d] transition-all duration-300 cursor-pointer">
            Wanita
        </button>
    </div>

    <!-- ==================== GRID PRODUK ==================== -->
    <div class="max-w-7xl mx-auto px-8 my-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            
            <!-- [PRIA] 1. Kalung -->
            <div class="item-produk pria bg-white rounded-[2rem] overflow-hidden shadow-sm flex flex-col p-4 border border-transparent hover:shadow-md transition-all duration-300">
                <div class="w-full h-56 rounded-[1.5rem] overflow-hidden bg-[#F7E7D4]">
                    <img src="{{ asset('images/kalung pria ( koleksi ).png') }}" alt="Kalung Pria" class="w-full h-full object-cover">
                </div>
                <div class="pt-4 pb-2 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="block text-[#8A684B] font-bold text-sm">Rp 200.000</span>
                        <h3 class="text-[#4A3525] font-serif text-lg font-semibold tracking-wide uppercase mt-0.5">KALUNG</h3>
                    </div>
                    <p class="text-[#4A3525]/70 text-xs mt-2 leading-relaxed">
                        Kalung minimalis untuk gaya modern
                    </p>
                </div>
            </div>

            <!-- [PRIA] 2. Gelang -->
            <div class="item-produk pria bg-white rounded-[2rem] overflow-hidden shadow-sm flex flex-col p-4 border border-transparent hover:shadow-md transition-all duration-300">
                <div class="w-full h-56 rounded-[1.5rem] overflow-hidden bg-[#F7E7D4]">
                    <img src="{{ asset('images/gelang pria ( koleksi ).png') }}" alt="Gelang Pria" class="w-full h-full object-cover">
                </div>
                <div class="pt-4 pb-2 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="block text-[#8A684B] font-bold text-sm">Rp 200.000</span>
                        <h3 class="text-[#4A3525] font-serif text-lg font-semibold tracking-wide uppercase mt-0.5">GELANG</h3>
                    </div>
                    <p class="text-[#4A3525]/70 text-xs mt-2 leading-relaxed">
                        Gelang maskulin yang stylish
                    </p>
                </div>
            </div>

            <!-- [PRIA] 3. Cincin -->
            <div class="item-produk pria bg-white rounded-[2rem] overflow-hidden shadow-sm flex flex-col p-4 border border-transparent hover:shadow-md transition-all duration-300">
                <div class="w-full h-56 rounded-[1.5rem] overflow-hidden bg-[#F7E7D4]">
                    <img src="{{ asset('images/cincin pria ( koleksi ).png') }}" alt="Cincin Pria" class="w-full h-full object-cover">
                </div>
                <div class="pt-4 pb-2 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="block text-[#8A684B] font-bold text-sm">Rp 200.000</span>
                        <h3 class="text-[#4A3525] font-serif text-lg font-semibold tracking-wide uppercase mt-0.5">CINCIN</h3>
                    </div>
                    <p class="text-[#4A3525]/70 text-xs mt-2 leading-relaxed">
                        Cincin elegan untuk pria
                    </p>
                </div>
            </div>

            <!-- [PRIA] 4. Kacamata -->
            <div class="item-produk pria bg-white rounded-[2rem] overflow-hidden shadow-sm flex flex-col p-4 border border-transparent hover:shadow-md transition-all duration-300">
                <div class="w-full h-56 rounded-[1.5rem] overflow-hidden bg-[#F7E7D4]">
                    <img src="{{ asset('images/kaca mata pria ( koleksi ).png') }}" alt="Kacamata Pria" class="w-full h-full object-cover">
                </div>
                <div class="pt-4 pb-2 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="block text-[#8A684B] font-bold text-sm">Rp 200.000</span>
                        <h3 class="text-[#4A3525] font-serif text-lg font-semibold tracking-wide uppercase mt-0.5">KACAMATA</h3>
                    </div>
                    <p class="text-[#4A3525]/70 text-xs mt-2 leading-relaxed">
                        Kacamata trendi dan nyaman digunakan
                    </p>
                </div>
            </div>

            <!-- [WANITA] 5. Kalung -->
            <div class="item-produk wanita bg-white rounded-[2rem] overflow-hidden shadow-sm flex flex-col p-4 border border-transparent hover:shadow-md transition-all duration-300">
                <div class="w-full h-56 rounded-[1.5rem] overflow-hidden bg-[#F7E7D4]">
                    <img src="{{ asset('images/kalung cewe ( kategori ).png') }}" alt="Kalung Wanita" class="w-full h-full object-cover">
                </div>
                <div class="pt-4 pb-2 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="block text-[#8A684B] font-bold text-sm">Rp 300.000</span>
                        <h3 class="text-[#4A3525] font-serif text-lg font-semibold tracking-wide uppercase mt-0.5">KALUNG</h3>
                    </div>
                    <p class="text-[#4A3525]/70 text-xs mt-2 leading-relaxed">
                        Kalung elegan dengan sentuhan feminin
                    </p>
                </div>
            </div>

            <!-- [WANITA] 6. Gelang -->
            <div class="item-produk wanita bg-white rounded-[2rem] overflow-hidden shadow-sm flex flex-col p-4 border border-transparent hover:shadow-md transition-all duration-300">
                <div class="w-full h-56 rounded-[1.5rem] overflow-hidden bg-[#F7E7D4]">
                    <img src="{{ asset('images/gelang cewe ( kategori ).png') }}" alt="Gelang Wanita" class="w-full h-full object-cover">
                </div>
                <div class="pt-4 pb-2 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="block text-[#8A684B] font-bold text-sm">Rp 200.000</span>
                        <h3 class="text-[#4A3525] font-serif text-lg font-semibold tracking-wide uppercase mt-0.5">GELANG</h3>
                    </div>
                    <p class="text-[#4A3525]/70 text-xs mt-2 leading-relaxed">
                        Gelang cantik yang mempermanis penampilan
                    </p>
                </div>
            </div>

            <!-- [WANITA] 7. Cincin -->
            <div class="item-produk wanita bg-white rounded-[2rem] overflow-hidden shadow-sm flex flex-col p-4 border border-transparent hover:shadow-md transition-all duration-300">
                <div class="w-full h-56 rounded-[1.5rem] overflow-hidden bg-[#F7E7D4]">
                    <img src="{{ asset('images/cincin cewe ( kategori ).png') }}" alt="Cincin Wanita" class="w-full h-full object-cover">
                </div>
                <div class="pt-4 pb-2 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="block text-[#8A684B] font-bold text-sm">Rp 150.000</span>
                        <h3 class="text-[#4A3525] font-serif text-lg font-semibold tracking-wide uppercase mt-0.5">CINCIN</h3>
                    </div>
                    <p class="text-[#4A3525]/70 text-xs mt-2 leading-relaxed">
                        Cincin berkilau dengan desain modern
                    </p>
                </div>
            </div>

            <!-- [WANITA] 8. Anting -->
            <div class="item-produk wanita bg-white rounded-[2rem] overflow-hidden shadow-sm flex flex-col p-4 border border-transparent hover:shadow-md transition-all duration-300">
                <div class="w-full h-56 rounded-[1.5rem] overflow-hidden bg-[#F7E7D4]">
                    <img src="{{ asset('images/anting cewe ( kategori ).png') }}" alt="Anting Wanita" class="w-full h-full object-cover">
                </div>
                <div class="pt-4 pb-2 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="block text-[#8A684B] font-bold text-sm">Rp 100.000</span>
                        <h3 class="text-[#4A3525] font-serif text-lg font-semibold tracking-wide uppercase mt-0.5">ANTING</h3>
                    </div>
                    <p class="text-[#4A3525]/70 text-xs mt-2 leading-relaxed">
                        Anting elegan yang menambah pesona
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- ==================== JAVASCRIPT FILTER KATEGORI ==================== -->
    <script>
        function filterKategori(kategori) {
            const items = document.querySelectorAll('.item-produk');
            const btnSemua = document.getElementById('btn-semua');
            const btnPria = document.getElementById('btn-pria');
            const btnWanita = document.getElementById('btn-wanita');

            // 1. Logika Tampilkan / Sembunyikan Produk
            items.forEach(item => {
                if (kategori === 'semua') {
                    item.style.display = 'flex';
                } else {
                    if (item.classList.contains(kategori)) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });

            // 2. Reset Gaya Semua Tombol (Kembalikan ke warna Krem Cokelat Muda)
            [btnSemua, btnPria, btnWanita].forEach(btn => {
                btn.classList.remove('bg-[#4A3525]', 'text-[#EADCC9]', 'scale-105', 'border-[#4A3525]');
                btn.classList.add('bg-[#D7BEA4]', 'text-[#50341B]', 'border-transparent');
            });

            // 3. Pasang Gaya Tombol Aktif (Menjadi Cokelat Tua saat diklik)
            if (kategori === 'semua') {
                btnSemua.classList.add('bg-[#4A3525]', 'text-[#EADCC9]', 'scale-105', 'border-[#4A3525]');
                btnSemua.classList.remove('bg-[#D7BEA4]', 'text-[#50341B]', 'border-transparent');
            } else if (kategori === 'pria') {
                btnPria.classList.add('bg-[#4A3525]', 'text-[#EADCC9]', 'scale-105', 'border-[#4A3525]');
                btnPria.classList.remove('bg-[#D7BEA4]', 'text-[#50341B]', 'border-transparent');
            } else if (kategori === 'wanita') {
                btnWanita.classList.add('bg-[#4A3525]', 'text-[#EADCC9]', 'scale-105', 'border-[#4A3525]');
                btnWanita.classList.remove('bg-[#D7BEA4]', 'text-[#50341B]', 'border-transparent');
            }
        }
    </script>
@endsection