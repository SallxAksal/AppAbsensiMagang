@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="px-6 pb-6 bg-gray-100 min-h-screen">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
            <div class="flex items-center space-x-4">
                <!-- Example Icons -->
                <i class="fas fa-bell text-gray-600 text-xl hover:text-blue-500 cursor-pointer"></i>
                <i class="fas fa-cog text-gray-600 text-xl hover:text-blue-500 cursor-pointer"></i>
            </div>
        </div>

        <!-- Overview Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Card: Total Pengguna -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center justify-between hover:shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-1">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Pengguna</p>
                    <h2 class="text-3xl font-bold text-gray-900 mt-1">1,234</h2>
                </div>
                <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <i class="fas fa-users text-2xl"></i>
                </div>
            </div>

            <!-- Card: Absensi Hari Ini -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center justify-between hover:shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-1">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Absensi Hari Ini</p>
                    <h2 class="text-3xl font-bold text-gray-900 mt-1">87%</h2>
                </div>
                <div class="bg-green-100 text-green-600 rounded-full p-3">
                    <i class="fas fa-calendar-check text-2xl"></i>
                </div>
            </div>

            <!-- Card: Laporan Aktivitas -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center justify-between hover:shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-1">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Laporan Aktivitas</p>
                    <h2 class="text-3xl font-bold text-gray-900 mt-1">456</h2>
                </div>
                <div class="bg-purple-100 text-purple-600 rounded-full p-3">
                    <i class="fas fa-chart-line text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Growth Chart Placeholder -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Grafik Pertumbuhan Pengguna</h3>
            <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center text-gray-400">
                <!-- Placeholder for a chart library (e.g., Chart.js, ApexCharts) -->
                <p>Grafik akan ditampilkan di sini</p>
            </div>
        </div>

        <!-- Recent Activity/Other Data (Example) -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Aktivitas Terbaru</h3>
            <ul class="divide-y divide-gray-200">
                <li class="py-3 flex justify-between items-center">
                    <p class="text-gray-700">Pengguna baru 'John Doe' terdaftar.</p>
                    <span class="text-gray-500 text-sm">2 jam lalu</span>
                </li>
                <li class="py-3 flex justify-between items-center">
                    <p class="text-gray-700">Absensi harian telah diperbarui.</p>
                    <span class="text-gray-500 text-sm">4 jam lalu</span>
                </li>
                <li class="py-3 flex justify-between items-center">
                    <p class="text-gray-700">Laporan aktivitas bulan lalu dibuat.</p>
                    <span class="text-gray-500 text-sm">1 hari lalu</span>
                </li>
            </ul>
        </div>
    </div>

@endsection
