<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Absensi & Aktivitas Magang</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-red-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6">
            <h1 class="text-xl font-semibold">Telkom Witel Bandung</h1>
            <nav class="space-x-6 hidden md:block">
                <a href="/" class="hover:underline">Beranda</a>
                <a href="/register" class="bg-white text-red-600 px-4 py-2 rounded-md font-medium hover:bg-gray-100 transition">Register</a>
            </nav>
        </div>
    </header>

    <!-- Login Form -->
    <section class="min-h-screen flex items-center justify-center py-12 px-6">
        <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-red-700">Login</h2>
                <p class="text-gray-600 mt-2">Masuk ke akun Anda untuk akses aplikasi absensi magang</p>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                </div>

                <button type="submit" class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition duration-200 font-medium">
                    Login
                </button>
            </form>

            <div class="text-center mt-6">
                <p class="text-gray-600">Belum punya akun? <a href="{{ route('register') }}" class="text-red-600 hover:underline font-medium">Daftar di sini</a></p>
            </div>
        </div>
    </section>

</body>
</html>
