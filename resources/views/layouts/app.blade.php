<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'App') — Telkom Witel Bandung</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="min-h-screen bg-gray-50">
    {{-- Mobile hamburger (fixed) so users can open sidebar on small screens --}}
    <button id="sidebarToggle" class="md:hidden fixed top-4 left-4 z-50 p-2 bg-white border rounded shadow-sm text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    {{-- Sidebar included here so it is always present for child layouts --}}
    @include('layouts.sidebar')

    {{-- Main content area --}}
    <div class="main-wrapper">
        <main class="py-8">
            <div>
                @yield('app-body')
            </div>
        </main>
    </div>

    <script>
        // Sidebar toggle handling (works on layouts that include sidebar)
        (function(){
            const btn = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('adminSidebar');
            const overlay = document.getElementById('sidebarOverlay');
            if(!btn || !sidebar) return;
            function openSidebar() {
                sidebar.classList.add('open');
                overlay && overlay.classList.remove('hidden');
                document.body.classList.add('sidebar-open-lock');
            }
            function closeSidebar() {
                sidebar.classList.remove('open');
                overlay && overlay.classList.add('hidden');
                document.body.classList.remove('sidebar-open-lock');
            }
            btn.addEventListener('click', () => {
                if(sidebar.classList.contains('open')) closeSidebar(); else openSidebar();
            });
            overlay && overlay.addEventListener('click', closeSidebar);
        })();

        // Logout functionality with modal and notifications
        (function(){
            const logoutBtn = document.getElementById('logoutBtn');
            const logoutModal = document.getElementById('logoutModal');
            const modalCancelBtn = document.getElementById('modalCancelBtn');
            const modalOkBtn = document.getElementById('modalOkBtn');
            const toast = document.getElementById('toast');

            if(!logoutBtn) return;

            // Show modal when logout button clicked
            logoutBtn.addEventListener('click', (e) => {
                e.preventDefault();
                logoutModal.classList.remove('hidden');
            });

            // Handle cancel button
            modalCancelBtn.addEventListener('click', () => {
                logoutModal.classList.add('hidden');
                showToast('Logout dibatalkan', 'error');
            });

            // Handle OK button - proceed with logout
            modalOkBtn.addEventListener('click', () => {
                logoutModal.classList.add('hidden');
                showToast('Berhasil logout', 'success');
                
                // Wait for toast to show, then logout
                setTimeout(() => {
                    // Create and submit hidden form for logout
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '{{ route("logout") }}';
                    form.innerHTML = '@csrf';
                    document.body.appendChild(form);
                    form.submit();
                }, 1000);
            });

            // Close modal when clicking on overlay
            const modalOverlay = logoutModal.querySelector('.modal-overlay');
            modalOverlay.addEventListener('click', () => {
                logoutModal.classList.add('hidden');
            });

            // Function to show toast notification (centered)
            function showToast(message, type) {
                toast.textContent = message;
                // reset classes
                toast.className = '';
                // set base classes
                toast.classList.add('pointer-events-auto', 'text-white', 'px-4', 'py-2', 'rounded', 'shadow-lg');
                if (type === 'success') {
                    toast.classList.add('bg-green-600');
                } else if (type === 'error') {
                    toast.classList.add('bg-red-600');
                } else {
                    toast.classList.add('bg-gray-800');
                }

                // show
                toast.classList.remove('hidden');

                // hide after 3s
                setTimeout(() => {
                    toast.classList.add('hidden');
                }, 3000);
            }
        })();

    @stack('scripts')
</body>
</html>