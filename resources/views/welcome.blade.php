<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiPengmas - Sistem Pengaduan Masyarakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            50: '#f0f4ff',
                            100: '#e0e9ff',
                            200: '#c7d6ff',
                            300: '#a5b8ff',
                            400: '#8191ff',
                            500: '#5d6aff',
                            600: '#4338ca',
                            700: '#3730a3',
                            800: '#312e81',
                            900: '#1e1b4b',
                            950: '#0f0d2a'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-navy-800">SiPengmas</h1>
                    </div>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="text-navy-800 hover:text-navy-600 px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="#laporan" class="text-gray-600 hover:text-navy-600 px-3 py-2 text-sm font-medium transition-colors">Laporan</a>
                    </div>
                </div>
                
                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('login') }}"><button class="text-navy-800 hover:text-navy-600 px-4 py-2 text-sm font-medium transition-colors">
                        Sign In
                    </button></a>
                    <a href="{{ route('register') }}"><button class="bg-navy-800 hover:bg-navy-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                        Sign Up
                    </button></a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-600 hover:text-navy-600 focus:outline-none focus:text-navy-600" onclick="toggleMobileMenu()">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-gray-200">
                <a href="#home" class="text-navy-800 block px-3 py-2 text-base font-medium">Home</a>
                <a href="#laporan" class="text-gray-600 hover:text-navy-600 block px-3 py-2 text-base font-medium">Laporan</a>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="flex items-center px-3 space-x-3">
                        <button class="text-navy-800 hover:text-navy-600 block px-3 py-2 text-base font-medium">Sign In</button>
                        <button class="bg-navy-800 hover:bg-navy-700 text-white px-4 py-2 rounded-lg text-sm font-medium">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-br from-navy-50 to-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-navy-900 mb-6 text-balance">
                    Suara Anda, <span class="text-navy-600">Perubahan Nyata</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto text-pretty">
                    Platform digital yang memudahkan masyarakat untuk menyampaikan pengaduan dan aspirasi kepada pemerintah daerah dengan transparan dan efektif.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-navy-800 hover:bg-navy-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors shadow-lg hover:shadow-xl">
                        Buat Laporan Sekarang
                    </button>
                    <button class="border-2 border-navy-800 text-navy-800 hover:bg-navy-800 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors">
                        Lihat Laporan
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4">Cara Kerja Platform</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Proses pengaduan yang mudah dan transparan dalam 3 langkah sederhana
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="bg-navy-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-navy-800">1</span>
                    </div>
                    <h3 class="text-xl font-semibold text-navy-900 mb-4">Buat Laporan</h3>
                    <p class="text-gray-600">
                        Sampaikan keluhan atau aspirasi Anda dengan mudah melalui formulir online yang tersedia 24/7.
                    </p>
                </div>
                
                <!-- Step 2 -->
                <div class="text-center">
                    <div class="bg-navy-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-navy-800">2</span>
                    </div>
                    <h3 class="text-xl font-semibold text-navy-900 mb-4">Proses Verifikasi</h3>
                    <p class="text-gray-600">
                        Tim kami akan memverifikasi dan meneruskan laporan Anda ke instansi terkait untuk ditindaklanjuti.
                    </p>
                </div>
                
                <!-- Step 3 -->
                <div class="text-center">
                    <div class="bg-navy-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-navy-800">3</span>
                    </div>
                    <h3 class="text-xl font-semibold text-navy-900 mb-4">Pantau Progress</h3>
                    <p class="text-gray-600">
                        Pantau perkembangan penanganan laporan Anda secara real-time melalui dashboard pribadi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-900 mb-4">Mengapa Pilih SiPengmas?</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Platform terpercaya untuk mewujudkan pemerintahan yang responsif dan transparan
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="bg-navy-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-navy-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-navy-900 mb-2">Aman & Terpercaya</h3>
                    <p class="text-gray-600 text-sm">Data pribadi Anda dilindungi dengan sistem keamanan tingkat tinggi.</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="bg-navy-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-navy-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-navy-900 mb-2">Respon Cepat</h3>
                    <p class="text-gray-600 text-sm">Laporan Anda akan diproses dan ditindaklanjuti dalam waktu maksimal 3x24 jam.</p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="bg-navy-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-navy-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-navy-900 mb-2">Transparan</h3>
                    <p class="text-gray-600 text-sm">Pantau status dan progress penanganan laporan Anda secara real-time.</p>
                </div>
                
                <!-- Benefit 4 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="bg-navy-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-navy-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-navy-900 mb-2">24/7 Tersedia</h3>
                    <p class="text-gray-600 text-sm">Platform dapat diakses kapan saja dan dimana saja melalui perangkat apapun.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-navy-800">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Mulai Sampaikan Aspirasi Anda Hari Ini
            </h2>
            <p class="text-xl text-navy-200 mb-8">
                Bergabunglah dengan ribuan warga yang telah mempercayai platform kami untuk menyampaikan pengaduan dan aspirasi.
            </p>
            <button class="bg-white hover:bg-gray-100 text-navy-800 px-8 py-4 rounded-lg text-lg font-semibold transition-colors shadow-lg hover:shadow-xl">
                Daftar Sekarang - Gratis
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">SiPengmas</h3>
                    <p class="text-gray-400 mb-4 max-w-md">
                        Platform digital yang menghubungkan masyarakat dengan pemerintah daerah untuk menciptakan pelayanan publik yang lebih baik dan transparan.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Be