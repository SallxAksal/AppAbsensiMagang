<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') — Telkom Witel Bandung</title>
    
    {{-- CSS Links --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- Stack for additional styles --}}
    @stack('styles')
</head>
<body class="flex flex-row min-h-screen bg-gray-50">
    {{-- Sidebar Navigation --}}
    @include('layouts.sidebar')

    {{-- Main Content Area --}}
    <div class="main-wrapper flex-1">
        <main class="flex-1 p-6 pt-0">
            {{-- Page Content --}}
            @yield('content')
        </main>
    </div>

    {{-- Logout Confirmation Component --}}
    @include('components.logout-confirmation')

    {{-- Stack for additional scripts --}}
    @stack('scripts')
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
