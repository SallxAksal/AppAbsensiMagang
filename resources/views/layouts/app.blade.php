<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'App') — Telkom Witel Bandung</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="flex flex-row min-h-screen bg-gray-50">
    {{-- Sidebar included here so it is always present for child layouts --}}
    @include('layouts.sidebar')

    {{-- Main content area --}}
    <div class="main-wrapper flex-1">
        <main>
            <div>
                @yield('app-body')
            </div>
        </main>
    </div>

    @stack('scripts')
</body>
</html>