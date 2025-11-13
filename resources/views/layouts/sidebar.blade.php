<div>
    <!-- Overlay for mobile -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-40 hidden md:hidden z-30 sidebar-overlay"></div>

    <!-- Sidebar -->
    <aside id="adminSidebar" class="admin-sidebar bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
        <div class="sidebar-inner h-full flex flex-col">
            <!-- Brand / Logo -->
            <div class="flex items-center justify-center px-4 mb-6">
                <div class="text-2xl font-extrabold text-white">Telkom Witel</div>
            </div>

            <!-- Profile Photo -->
            <div class="flex flex-col items-center px-4 mb-6">
                <img src="{{ asset('storage/profile/' . (Auth::user()->profile_photo ?? 'default.svg')) }}" alt="{{ Auth::user()->name ?? 'Admin' }}" class="w-24 h-24 rounded-full object-cover border-2 border-gray-400" onerror="this.src='{{ asset('storage/profile/default.svg') }}'">
                <div class="mt-3 text-lg font-semibold text-white">{{ Auth::user()->name ?? 'Admin' }}</div>
                <div class="text-sm text-gray-400">Admin</div>
            </div>

            <!-- Menu -->
            <nav class="flex-1 space-y-2 px-4">
                <a href="{{ route('admin.dashboard') }}" class="nav-item flex items-center px-4 py-2 rounded-md transition duration-200 ease-in-out {{ request()->routeIs('admin.dashboard') ? 'bg-red-600 text-white shadow-md' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span class="nav-label">Dashboard</span>
                </a>

                <a href="{{ route('admin.magang') }}" class="nav-item flex items-center px-4 py-2 rounded-md transition duration-200 ease-in-out {{ request()->routeIs('admin.magang') ? 'bg-red-600 text-white shadow-md' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <i class="fas fa-users mr-3"></i>
                    <span class="nav-label">User Account Magang</span>
                </a>

                <a href="{{ route('admin.attendance') }}" class="nav-item flex items-center px-4 py-2 rounded-md transition duration-200 ease-in-out {{ request()->routeIs('admin.attendance') ? 'bg-red-600 text-white shadow-md' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <i class="fas fa-calendar-check mr-3"></i>
                    <span class="nav-label">Attendance</span>
                </a>

                <a href="{{ route('admin.activity-report') }}" class="nav-item flex items-center px-4 py-2 rounded-md transition duration-200 ease-in-out {{ request()->routeIs('admin.activity-report') ? 'bg-red-600 text-white shadow-md' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span class="nav-label">Activity Reports</span>
                </a>
            </nav>

            <!-- Account Info (above logout) -->
            <div class="px-4 py-2">
                <div class="sidebar-account">
                    <div class="account-info">
                        <div class="account-avatar">A</div>
                        <div class="account-meta">
                            <div class="account-name">{{ Auth::user()->name ?? 'Admin' }}</div>
                            <div class="account-role">Admin</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logout Button (pushed to very bottom) -->
            @if(Auth::check())
            <div class="sidebar-logout mt-auto px-4 py-4 border-t border-gray-700">
                <a href="#" id="logoutBtn" class="nav-item flex items-center justify-center gap-2 bg-red-600 hover:bg-red-700 active:bg-red-800 text-white rounded-md px-3 py-2 font-semibold transition-colors duration-200 ease-in-out shadow-md">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="logout-text">Logout</span>
                </a>
            </div>
            @else
            <div class="sidebar-logout mt-auto px-4 py-4 border-t border-gray-700">
                <a href="{{ route('login') }}" class="w-full inline-flex items-center justify-center gap-2 bg-white border text-gray-800 rounded-md px-3 py-2">Login</a>
            </div>
            @endif
        </div>
    </aside>

</div>

<style>
    /* Ensure the sidebar is a flex container and takes full height */
    .admin-sidebar {
        display: flex;
        flex-direction: column;
        height: 100vh; /* Take full viewport height */
    }

    /* Ensure the inner content stretches */
    .sidebar-inner {
        flex-grow: 1; /* Allow inner content to grow and fill available space */
        display: flex;
        flex-direction: column;
    }

    /* Position the logout button at the very bottom */
    .sidebar-logout {
        margin-top: auto; /* Push to the bottom */
    }
</style>
