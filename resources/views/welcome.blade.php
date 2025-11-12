<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi & Aktivitas Magang | Telkom Witel Bandung</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="">

    <!-- Header -->
    <header class="header">
        <a href="/" class="logo">Telkom Witel Bandung</a>
        <nav>
            <a href="#home">Beranda</a>
            <a href="#fitur">Fitur</a>
            <a href="#tentang">Tentang</a>
            <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        </nav>
    </header>

    {{-- Hero Section --}}
    <section id="home" class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Aplikasi Absensi & Aktivitas Magang</h1>
            <p class="hero-description">Solusi digital untuk pencatatan kehadiran dan laporan kegiatan peserta magang Telkom Witel Bandung.</p>

            {{-- Motion Graphic: Magang di Telkom --}}
                        <div class="hero-actions">
                            <a href="{{ route('register') }}" class="btn btn-primary">Mulai Sekarang</a>
                            <a href="#fitur" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </section>
            
                {{-- Fitur Section --}}
                <section id="fitur" class="features-section">
                    <h2 class="section-title">Fitur Unggulan</h2>
                    <div class="features-grid">
                        <div class="feature-card">
                            <h3 class="feature-title">Absensi Online</h3>
                            <p class="feature-description">Catat kehadiran masuk dan pulang secara real-time menggunakan akun magang Anda.</p>
                        </div>
                        <div class="feature-card">
                            <h3 class="feature-title">Laporan Aktivitas</h3>
                            <p class="feature-description">Isi dan pantau aktivitas harian selama magang secara terstruktur dan mudah.</p>
                        </div>
                        <div class="feature-card">
                            <h3 class="feature-title">Monitoring Pembimbing</h3>
                            <p class="feature-description">Pembimbing dapat memverifikasi absensi dan aktivitas langsung dari dashboard admin.</p>
                        </div>
                    </div>
                </section>
            
                {{-- Tentang Section --}}
                <section id="tentang" class="about-section">
                    <h2 class="section-title">Tentang Aplikasi</h2>
                    <p class="about-description">
                        Aplikasi ini dikembangkan untuk mendukung efisiensi kegiatan magang di lingkungan
                        <span class="font-semibold">Telkom Witel Bandung</span>.
                        Dengan sistem absensi digital dan pencatatan aktivitas otomatis,
                        peserta magang dapat lebih mudah melaporkan kegiatan harian,
                        sementara pembimbing dapat memantau dengan cepat dan akurat.
                    </p>
                </section>
            
                {{-- Footer Section --}}
                <footer class="footer">
                    <p>&copy; {{ date('Y') }} Telkom Witel Bandung. All rights reserved.</p>
                </footer>
            
            </body>
            </html>
