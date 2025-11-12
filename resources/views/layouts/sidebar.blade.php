<div>
    <!-- Overlay for mobile -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-40 hidden md:hidden z-30 sidebar-overlay"></div>

    <!-- Sidebar -->
    <aside id="adminSidebar" class="admin-sidebar">
        <div class="sidebar-inner h-full flex flex-col">
            <!-- Profile Photo -->
            <div class="sidebar-profile-photo">
                <img src="{{ asset('storage/profile/' . (Auth::user()->profile_photo ?? 'default.svg')) }}" alt="{{ Auth::user()->name ?? 'Admin' }}" class="profile-photo-img" onerror="this.src='{{ asset('storage/profile/default.svg') }}'">
            </div>

            <!-- Brand / Logo -->
            <div class="sidebar-brand">
                <div class="brand-logo">I</div>
                <div class="brand-text">Telkom Witel Bandung</div>
            </div>

            <!-- Menu -->
            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} flex items-center text-white">
                    <svg class="inline-block mr-3 flex-shrink-0" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1V9.5z"/>
                    </svg>
                    <span class="nav-label text-white">Dashboard</span>
                </a>

                <a href="{{ route('admin.magang') }}" class="nav-item {{ request()->routeIs('admin.magang') ? 'active' : '' }} flex items-center text-white">
                    <svg class="inline-block mr-3 flex-shrink-0" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M16 11c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM8 11c1.657 0 3-1.343 3-3S9.657 5 8 5 5 6.343 5 8s1.343 3 3 3zm0 2c-2.33 0-7 1.167-7 3.5V19h14v-2.5C15 14.167 10.33 13 8 13zm8 2c-.29 0-.62.02-.97.06C16.8 15.89 18 14.671 18 13v-.5c0 2.333-4.67 3.5-7 3.5z"/>
                    </svg>
                    <span class="nav-label text-white">User Account Magang</span>
                </a>

                <a href="{{ route('admin.attendance') }}" class="nav-item {{ request()->routeIs('admin.attendance') ? 'active' : '' }} flex items-center text-white">
                    <svg class="inline-block mr-3 flex-shrink-0" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M7 11h10v2H7v-2zm-4-6h2V3h2v2h8V3h2v2h2a1 1 0 011 1v14a1 1 0 01-1 1H3a1 1 0 01-1-1V6a1 1 0 011-1zM3 8v12h18V8H3z"/>
                    </svg>
                    <span class="nav-label text-white">Attendance</span>
                </a>

                <a href="{{ route('admin.activity-report') }}" class="nav-item {{ request()->routeIs('admin.activity-report') ? 'active' : '' }} flex items-center text-white">
                    <svg class="inline-block mr-3 flex-shrink-0" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 13h4v8H3v-8zm6-6h4v14h-4V7zm6 4h4v10h-4V11z"/>
                    </svg>
                    <span class="nav-label text-white">Activity Reports</span>
                </a>
            </nav>

            <!-- Account at bottom -->
            <div class="sidebar-account">
                <div class="account-info">
                    <div class="account-avatar">A</div>
                    <div class="account-meta">
                        <div class="account-name">{{ Auth::user()->name ?? 'Admin' }}</div>
                        <div class="account-role">Admin</div>
                    </div>
                </div>
            </div>

            <!-- Logout Button (bottom) -->
            @if(Auth::check())
            <div class="sidebar-logout mt-auto px-4 py-4">
                <button id="logoutBtn" class="w-full inline-flex items-center justify-center gap-2 bg-red-600 hover:bg-red-700 text-white rounded-md px-3 py-2">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
                        <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                        <path d="M20 3H12v2h8v14h-8v2h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"></path>
                    </svg>
                    <span class="logout-text">Logout</span>
                </button>
            </div>
            @else
            <div class="sidebar-logout mt-auto px-4 py-4">
                <a href="{{ route('login') }}" class="w-full inline-flex items-center justify-center gap-2 bg-white border text-gray-800 rounded-md px-3 py-2">Login</a>
            </div>
            @endif
        </div>
    </aside>

    <!-- Logout Confirmation Modal (centered) -->
    <div id="logoutModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-black bg-opacity-50 modal-overlay"></div>
        <div class="bg-white rounded-lg shadow-lg z-10 max-w-sm w-full p-6 mx-4">
            <h2 class="text-lg font-semibold mb-2">Konfirmasi Logout</h2>
            <p class="text-sm text-gray-600 mb-4">Yakin ingin keluar?</p>
            <div class="flex justify-end gap-3">
                <button id="modalCancelBtn" class="px-3 py-1.5 rounded bg-gray-100 text-gray-700">Batal</button>
                <button id="modalOkBtn" class="px-3 py-1.5 rounded bg-red-600 text-white">OK</button>
            </div>
        </div>
    </div>

    <!-- Toast Notifications (centered) -->
    <div id="toastContainer" class="fixed inset-0 z-50 pointer-events-none flex items-center justify-center">
        <div id="toast" class="hidden pointer-events-auto text-white px-4 py-2 rounded shadow-lg"></div>
    </div>

</div>

