<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Of Me - @yield('title', 'Aksesoris Pria & Wanita')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'serif': ['"Playfair Display"', 'serif'],
                        'sans': ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CJX738FG3M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CJX738FG3M');
</script>
</head>
<body class="bg-[#EADCC9] text-[#4A3525] font-sans antialiased selection:bg-[#8A684B] selection:text-white scroll-smooth">

    <header class="w-full sticky top-0 z-50">
        <div class="w-full h-9 bg-[#50341B]"></div>
        <nav class="w-full bg-[#D7BEA4] px-8 py-3 flex items-center justify-between shadow-sm transition-all duration-300">
            <a href="{{ route('home') }}#beranda" class="flex items-center space-x-3 cursor-pointer group">
                <div class="w-10 h-7 bg-[#F7E7D4] rounded-full relative opacity-90 group-hover:scale-105 transition-transform duration-300 flex items-center justify-center">
                    <div class="w-6 h-6 bg-[#F7E7D4] rounded-full absolute -top-2 left-1"></div>
                    <div class="w-6 h-6 bg-[#F7E7D4] rounded-full absolute -top-1.5 right-1"></div>
                    <span class="text-[7px] font-bold text-[#50341B] z-10 scale-90">PopOfMe</span>
                </div>
                <span class="font-serif text-2xl font-medium tracking-normal text-[#4A321A]">Pop Of Me</span>
            </a>

            <div class="hidden md:flex items-center space-x-10 text-sm font-medium text-[#50341B]/90">
                <a href="{{ route('home') }}#beranda" class="hover:text-black transition-colors duration-300">Beranda</a>
                <a href="{{ route('home') }}#tentang-kami" class="hover:text-black transition-colors duration-300">Tentang Kami</a>
                <a href="{{ route('kategori.index') }}" class="hover:text-black transition-colors duration-300">Kategori</a>
                
                <a href="{{ route('kontak.index') }}" class="hover:text-black transition-colors duration-300">Kontak</a>
            </div>

            <div class="relative max-w-xs hidden sm:block">
                <input type="text" placeholder="cari aksesoris..." class="w-56 px-4 py-1.5 bg-[#E2CBB3] text-xs text-[#50341B] rounded-full border border-transparent focus:border-[#50341B] focus:bg-white focus:outline-none transition-all duration-300 placeholder-[#7D644D] pr-8">
                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[#7D644D] cursor-pointer hover:text-black transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3.5 h-3.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.602 10.602Z" />
                    </svg>
                </span>
            </div>
        </nav>
    </header>

    <main class="w-full">
        @yield('content')
    </main>

    <footer class="w-full bg-gradient-to-r from-[#8E632B] via-[#744E1F] to-[#50341B] text-[#F7E7D4] py-12 px-10 rounded-t-[2.5rem] mt-12">
        <div class="max-w-7xl mx-auto flex flex-col items-start space-y-4">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-7 bg-[#F7E7D4] rounded-full relative shadow-inner flex items-center justify-center">
                    <div class="w-6 h-6 bg-[#F7E7D4] rounded-full absolute -top-2 left-1"></div>
                    <div class="w-6 h-6 bg-[#F7E7D4] rounded-full absolute -top-1.5 right-1"></div>
                    <span class="text-[7px] font-bold text-[#50341B] z-10 scale-90">PopOfMe</span>
                </div>
                <span class="font-serif text-2xl text-white tracking-wide">Pop Of Me</span>
            </div>

            <p class="text-xs text-[#F7E7D4]/90 max-w-sm leading-relaxed font-light">
                Aksesoris untuk pria dan wanita yang ingin tampil percaya diri setiap saat.
            </p>

            <div class="flex items-center space-x-4 pt-3">
                <a href="https://instagram.com/popofme.id" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-[#F7E7D4]/40 flex items-center justify-center text-[#F7E7D4] hover:bg-white hover:text-[#50341B] transition-all duration-300">
                    <i class="fab fa-instagram text-xs"></i>
                </a>
                <a href="https://wa.me/6282323942972?text=Halo%20Pop%20Of%20Me,%20saya%20ingin%20bertanya%20tentang%20produk%20aksesorisnya" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-[#F7E7D4]/40 flex items-center justify-center text-[#F7E7D4] hover:bg-white hover:text-[#50341B] transition-all duration-300">
                    <i class="fab fa-whatsapp text-xs"></i>
                </a>
                <a href="https://tiktok.com/@popofme.id" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-[#F7E7D4]/40 flex items-center justify-center text-[#F7E7D4] hover:bg-white hover:text-[#50341B] transition-all duration-300">
                    <i class="fab fa-tiktok text-xs"></i>
                </a>
            </div>
        </div>

        <div class="max-w-7xl mx-auto mt-12 pt-6 border-t border-white/10 text-center text-[10px] text-[#F7E7D4]/40">
            Copyright &copy; 2026 Pop Of Me. All rights reserved.
        </div>
    </footer>

</body>
</html>
