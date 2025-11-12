<header class="w-full bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between md:ml-64">
        <div class="flex items-center gap-3">
            <!-- Hamburger visible on small screens -->
            <button id="sidebarToggle" class="md:hidden p-2 rounded bg-white border shadow-sm text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div>
                <h1 class="text-lg font-semibold">@yield('title', 'Dashboard')</h1>
                <p class="text-xs text-gray-500">@yield('subtitle')</p>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <!-- Placeholder for right-side actions (profile, settings) -->
            <div class="hidden sm:flex items-center gap-3">
                <span class="text-sm text-gray-600">{{ Auth::user()->name ?? '' }}</span>
            </div>
        </div>
    </div>
</header>
