@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <div>
            <h1>Dashboard Admin</h1>
            <p>Overview of system activity and quick access to common admin tasks.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <a href="{{ route('admin.magang') }}" class="dashboard-card">
            <div class="dashboard-card-icon">�</div>
            <h3 class="dashboard-card-title">7</h3>
            <p class="dashboard-card-description">Total Pengguna</p>
        </a>

        <a href="{{ route('admin.attendance') }}" class="dashboard-card">
            <div class="dashboard-card-icon">📅</div>
            <h3 class="dashboard-card-title">6</h3>
            <p class="dashboard-card-description">Absensi Hari Ini</p>
        </a>

        <a href="{{ route('admin.activity-report') }}" class="dashboard-card">
            <div class="dashboard-card-icon">📊</div>
            <h3 class="dashboard-card-title">10</h3>
            <p class="dashboard-card-description">Laporan Aktivitas</p>
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="content-placeholder">
            <h2>Pertumbuhan Pengguna</h2>
            <p>Total pengguna dalam 6 bulan terakhir</p>
            <div style="height:240px; margin-top:16px; background:#fff; border-radius:8px; border:1px solid var(--gray-100);"></div>
        </div>

        <div class="content-placeholder">
            <h2>Absensi Harian</h2>
            <p>Ringkasan kehadiran peserta magang</p>
            <div style="height:240px; margin-top:16px; background:#fff; border-radius:8px; border:1px solid var(--gray-100);"></div>
        </div>
    </div>

@endsection
@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <div>
            <h1>Dashboard Admin</h1>
            <p>Overview of system activity and quick access to common admin tasks.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <a href="{{ route('admin.magang') }}" class="dashboard-card">
            <div class="dashboard-card-icon">�</div>
            <h3 class="dashboard-card-title">7</h3>
            <p class="dashboard-card-description">Total Pengguna</p>
        </a>

        <a href="{{ route('admin.attendance') }}" class="dashboard-card">
            <div class="dashboard-card-icon">📅</div>
            <h3 class="dashboard-card-title">6</h3>
            <p class="dashboard-card-description">Absensi Hari Ini</p>
        </a>

        <a href="{{ route('admin.activity-report') }}" class="dashboard-card">
            <div class="dashboard-card-icon">📊</div>
            <h3 class="dashboard-card-title">10</h3>
            <p class="dashboard-card-description">Laporan Aktivitas</p>
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="content-placeholder">
            <h2>Pertumbuhan Pengguna</h2>
            <p>Total pengguna dalam 6 bulan terakhir</p>
            <div style="height:240px; margin-top:16px; background:#fff; border-radius:8px; border:1px solid var(--gray-100);"></div>
        </div>

        <div class="content-placeholder">
            <h2>Absensi Harian</h2>
            <p>Ringkasan kehadiran peserta magang</p>
            <div style="height:240px; margin-top:16px; background:#fff; border-radius:8px; border:1px solid var(--gray-100);"></div>
        </div>
    </div>

@endsection
