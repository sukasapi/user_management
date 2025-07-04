<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | User Management</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-200 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white/80 shadow sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center gap-2">
                <span class="text-2xl font-bold text-blue-800">User Management</span>
            </div>
            <nav class="hidden md:flex gap-8 text-blue-700 font-medium">
                <a href="#banner" class="hover:text-blue-900 transition">Home</a>
                <a href="#about" class="hover:text-blue-900 transition">Tentang Kami</a>
                <a href="#portfolio" class="hover:text-blue-900 transition">Portofolio</a>
                <a href="#artikel" class="hover:text-blue-900 transition">Artikel</a>
                <a href="#footer" class="hover:text-blue-900 transition">Kontak</a>
            </nav>
            <a href="/admin" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition text-sm">Login Admin</a>
        </div>
    </header>

    <!-- Banner Section -->
    <section id="banner" class="flex flex-col md:flex-row items-center justify-between gap-8 py-16 px-6 container mx-auto">
        <div class="flex-1 text-center md:text-left">
            <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-4">Sistem Manajemen User Modern</h1>
            <p class="text-lg md:text-xl text-blue-700 mb-6 max-w-xl">Kelola user, role, menu, dan akses aplikasi Anda dengan mudah, aman, dan fleksibel. Panel admin modern, audit trail, dan fitur RBAC siap digunakan untuk berbagai kebutuhan bisnis dan organisasi.</p>
            <a href="/admin" class="inline-block px-8 py-3 bg-blue-600 text-white text-lg rounded-lg shadow-lg hover:bg-blue-700 transition font-semibold">Masuk ke Admin Panel</a>
        </div>
        <div class="flex-1 flex justify-center">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Banner" class="rounded-xl shadow-lg w-full max-w-md object-cover">
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="bg-white/80 py-16 px-6">
        <div class="container mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-bold text-blue-800 mb-4">Tentang Kami</h2>
            <p class="text-blue-700 text-lg mb-6">Kami adalah tim pengembang yang berfokus pada solusi manajemen user, role, dan akses aplikasi berbasis Laravel & Filament. Kami percaya keamanan, kemudahan, dan fleksibilitas adalah kunci utama aplikasi modern.</p>
            <div class="flex flex-wrap justify-center gap-8 mt-8">
                <div class="bg-blue-100 rounded-lg p-6 w-64 shadow">
                    <h3 class="font-bold text-blue-800 mb-2">Fleksibel</h3>
                    <p class="text-blue-700 text-sm">Mudah diintegrasikan ke berbagai aplikasi dan platform.</p>
                </div>
                <div class="bg-blue-100 rounded-lg p-6 w-64 shadow">
                    <h3 class="font-bold text-blue-800 mb-2">Aman</h3>
                    <p class="text-blue-700 text-sm">Proteksi data, audit trail, dan role-based access control.</p>
                </div>
                <div class="bg-blue-100 rounded-lg p-6 w-64 shadow">
                    <h3 class="font-bold text-blue-800 mb-2">Modern</h3>
                    <p class="text-blue-700 text-sm">UI responsif, didukung Tailwind & Filament.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-16 px-6 container mx-auto">
        <h2 class="text-3xl font-bold text-blue-800 text-center mb-8">Portofolio</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80" alt="Project 1" class="rounded-md mb-4 w-full h-40 object-cover">
                <h3 class="font-bold text-blue-800 mb-2">Aplikasi HRIS</h3>
                <p class="text-blue-700 text-sm text-center">Sistem manajemen karyawan, absensi, dan payroll berbasis web.</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Project 2" class="rounded-md mb-4 w-full h-40 object-cover">
                <h3 class="font-bold text-blue-800 mb-2">Portal Akademik</h3>
                <p class="text-blue-700 text-sm text-center">Manajemen user, role, dan akses untuk sistem akademik universitas.</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Project 3" class="rounded-md mb-4 w-full h-40 object-cover">
                <h3 class="font-bold text-blue-800 mb-2">Sistem E-Commerce</h3>
                <p class="text-blue-700 text-sm text-center">Integrasi manajemen user dan akses pada platform toko online.</p>
            </div>
        </div>
    </section>

    <!-- Artikel Section -->
    <section id="artikel" class="bg-white/80 py-16 px-6">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-3xl font-bold text-blue-800 text-center mb-8">Artikel Terbaru</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-blue-50 rounded-lg p-6 shadow flex flex-col">
                    <h3 class="font-bold text-blue-800 mb-2">Tips Keamanan Data User</h3>
                    <p class="text-blue-700 text-sm flex-1">Bagaimana menjaga keamanan data user di aplikasi modern? Simak tips dan best practice-nya di sini.</p>
                    <a href="#" class="mt-4 text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
                </div>
                <div class="bg-blue-50 rounded-lg p-6 shadow flex flex-col">
                    <h3 class="font-bold text-blue-800 mb-2">Mengenal RBAC</h3>
                    <p class="text-blue-700 text-sm flex-1">Role-Based Access Control (RBAC) adalah kunci fleksibilitas dan keamanan aplikasi multi-user.</p>
                    <a href="#" class="mt-4 text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
                </div>
                <div class="bg-blue-50 rounded-lg p-6 shadow flex flex-col">
                    <h3 class="font-bold text-blue-800 mb-2">Integrasi Laravel & Filament</h3>
                    <p class="text-blue-700 text-sm flex-1">Mengapa Filament menjadi pilihan utama untuk admin panel Laravel modern? Temukan jawabannya di artikel ini.</p>
                    <a href="#" class="mt-4 text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="bg-blue-900 text-white py-8 mt-12">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-4 px-6">
            <div class="text-center md:text-left">
                <div class="font-bold text-lg">User Management</div>
                <div class="text-sm">&copy; {{ date('Y') }} All rights reserved.</div>
            </div>
            <div class="flex gap-6">
                <a href="#banner" class="hover:underline">Home</a>
                <a href="#about" class="hover:underline">Tentang Kami</a>
                <a href="#portfolio" class="hover:underline">Portofolio</a>
                <a href="#artikel" class="hover:underline">Artikel</a>
            </div>
            <div class="text-sm text-center md:text-right">Powered by Laravel & Filament</div>
        </div>
    </footer>
</body>
</html> 