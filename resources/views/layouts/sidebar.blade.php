<div>
    <!-- Overlay for mobile -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-40 hidden md:hidden z-30 sidebar-overlay"></div>

    <!-- Sidebar -->
    <aside id="adminSidebar" class="admin-sidebar">
        <div class="sidebar-inner h-full flex flex-col">
            <!-- Brand / Logo -->
            <div class="sidebar-brand">
                <div class="brand-logo">I</div>
                <div class="brand-text">Telkom Witel Bandung</div>
            </div>

            <!-- Menu -->
            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span class="nav-icon">🏠</span>
                    <span class="nav-label">Dashboard</span>
                </a>

                <a href="{{ route('admin.magang') }}" class="nav-item {{ request()->routeIs('admin.magang') ? 'active' : '' }}">
                    <span class="nav-icon">👥</span>
                    <span class="nav-label">User Account Magang</span>
                </a>

                <a href="{{ route('admin.attendance') }}" class="nav-item {{ request()->routeIs('admin.attendance') ? 'active' : '' }}">
                    <span class="nav-icon">📅</span>
                    <span class="nav-label">Attendance</span>
                </a>

                <a href="{{ route('admin.activity-report') }}" class="nav-item {{ request()->routeIs('admin.activity-report') ? 'active' : '' }}">
                    <span class="nav-icon">📊</span>
                    <span class="nav-label">Activity Reports</span>
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
        </div>
    </aside>
</div>
