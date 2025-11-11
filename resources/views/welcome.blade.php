<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi & Aktivitas Magang | Telkom Witel Bandung</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-red-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-4 md:px-6">
            <h1 class="text-xl font-semibold">Telkom Witel Bandung</h1>
            <nav class="space-x-4 md:space-x-6 hidden md:flex">
                <a href="#home" class="hover:underline">Beranda</a>
                <a href="#fitur" class="hover:underline">Fitur</a>
                <a href="#tentang" class="hover:underline">Tentang</a>
                <a href="{{ route('login') }}" class="bg-white text-red-600 px-4 py-2 rounded-md font-medium hover:bg-gray-100 transition">Login</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative bg-cover bg-center h-[60vh] md:h-[80vh]" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/8/83/Telkom_Indonesia_logo.svg'); background-size: 150px; background-repeat: no-repeat; background-position: right 1rem center;">
        <div class="absolute inset-0 bg-red-700 bg-opacity-70"></div>
        <div class="relative z-10 flex flex-col justify-center items-start max-w-5xl mx-auto h-full text-white px-4 md:px-6">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 leading-tight">Aplikasi Absensi & Aktivitas Magang</h2>
            <p class="text-base md:text-lg lg:text-xl mb-6">Solusi digital untuk pencatatan kehadiran dan laporan kegiatan peserta magang Telkom Witel Bandung.</p>
            <a href="{{ route('login') }}" class="bg-white text-red-600 px-4 md:px-6 py-3 rounded-md text-base md:text-lg font-semibold hover:bg-gray-100 transition">Mulai Sekarang</a>
        </div>
    </section>

    <!-- Fitur Section -->
    <section id="fitur" class="py-8 md:py-16 bg-white">
        <div class="max-w-6xl mx-auto text-center px-4 md:px-6">
            <h3 class="text-2xl md:text-3xl font-bold mb-8 md:mb-10 text-red-700">Fitur Unggulan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                <div class="p-4 md:p-6 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition">
                    <h4 class="text-lg md:text-xl font-semibold mb-2">Absensi Online</h4>
                    <p class="text-sm md:text-base">Catat kehadiran masuk dan pulang secara real-time menggunakan akun magang Anda.</p>
                </div>
                <div class="p-4 md:p-6 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition">
                    <h4 class="text-lg md:text-xl font-semibold mb-2">Laporan Aktivitas</h4>
                    <p class="text-sm md:text-base">Isi dan pantau aktivitas harian selama magang secara terstruktur dan mudah.</p>
                </div>
                <div class="p-4 md:p-6 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition">
                    <h4 class="text-lg md:text-xl font-semibold mb-2">Monitoring Pembimbing</h4>
                    <p class="text-sm md:text-base">Pembimbing dapat memverifikasi absensi dan aktivitas langsung dari dashboard admin.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang" class="py-8 md:py-16 bg-gray-100">
        <div class="max-w-5xl mx-auto text-center px-4 md:px-6">
            <h3 class="text-2xl md:text-3xl font-bold mb-6 text-red-700">Tentang Aplikasi</h3>
            <p class="text-base md:text-lg leading-relaxed">
                Aplikasi ini dikembangkan untuk mendukung efisiensi kegiatan magang di lingkungan
                <span class="font-semibold">Telkom Witel Bandung</span>.
                Dengan sistem absensi digital dan pencatatan aktivitas otomatis,
                peserta magang dapat lebih mudah melaporkan kegiatan harian,
                sementara pembimbing dapat memantau dengan cepat dan akurat.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-red-700 text-white py-6">
        <div class="max-w-6xl mx-auto text-center text-xs md:text-sm px-4">
            © {{ date('Y') }} Telkom Witel Bandung — Aplikasi Absensi & Aktivitas Magang.
        </div>
    </footer>

</body>
</html>
