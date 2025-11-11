<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Magang - Absensi & Aktivitas Magang</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-red-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-4 md:px-6">
            <h1 class="text-lg md:text-xl font-semibold">Dashboard Magang - Telkom Witel Bandung</h1>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="bg-white text-red-600 px-3 md:px-4 py-2 rounded-md text-sm md:text-base font-medium hover:bg-gray-100 transition">Logout</button>
            </form>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-8 px-4 md:px-6">
        <h2 class="text-2xl font-bold mb-6">Selamat Datang, {{ Auth::user()->name }} (Peserta Magang)</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Absensi -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Absensi</h3>
                <p class="text-gray-600 mb-4">Catat kehadiran masuk dan pulang Anda.</p>
                <a href="#" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Absen Sekarang</a>
            </div>

            <!-- Card 2: Laporan Aktivitas -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Laporan Aktivitas</h3>
                <p class="text-gray-600 mb-4">Isi dan kirim laporan aktivitas harian Anda.</p>
                <a href="#" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Buat Laporan</a>
            </div>

            <!-- Card 3: Riwayat -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Riwayat</h3>
                <p class="text-gray-600 mb-4">Lihat riwayat absensi dan laporan aktivitas Anda.</p>
                <a href="#" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Lihat Riwayat</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-red-700 text-white py-6 mt-12">
        <div class="max-w-6xl mx-auto text-center text-xs md:text-sm px-4">
            © {{ date('Y') }} Telkom Witel Bandung — Aplikasi Absensi & Aktivitas Magang.
        </div>
    </footer>

</body>
</html>
