<!-- ============================================
     LOGOUT CONFIRMATION COMPONENT
     File: resources/views/components/logout-confirmation.blade.php
     
     Fitur:
     - Modal konfirmasi logout di tengah layar
     - Toast notification untuk feedback
     - If-else logic untuk kontrol behavior
     - Responsive dan smooth animation
     ============================================ -->

<!-- Logout Confirmation Modal -->
<div id="logoutModal" class="fixed inset-0 z-50 hidden flex items-center justify-center logout-modal">
    <!-- Overlay transparan -->
    <div class="absolute inset-0 bg-black bg-opacity-50 modal-overlay cursor-pointer"></div>
    
    <!-- Modal Container -->
    <div class="modal-content bg-white rounded-xl shadow-2xl z-10 max-w-sm w-full mx-4">
        <!-- Modal Header -->
        <div class="modal-header p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Konfirmasi Logout</h2>
        </div>

        <!-- Modal Body -->
        <div class="modal-body p-6">
            <p class="text-base text-gray-600">Yakin ingin keluar?</p>
        </div>

        <!-- Modal Footer with Buttons -->
        <div class="modal-footer p-6 border-t border-gray-200 flex justify-end gap-3">
            <!-- Batal Button (Red) -->
            <button id="modalCancelBtn" 
                    class="px-4 py-2 rounded-lg bg-red-600 text-white font-semibold hover:bg-red-700 active:bg-red-800 transition-colors duration-200">
                Batal
            </button>

            <!-- OK Button (Green) - Hidden form submit -->
            <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" id="modalOkBtn" 
                        class="px-4 py-2 rounded-lg bg-green-600 text-white font-semibold hover:bg-green-700 active:bg-green-800 transition-colors duration-200">
                    OK
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Toast Notifications Container -->
<div id="toastContainer" class="fixed inset-0 z-50 pointer-events-none flex items-center justify-center logout-toast-container">
    <div id="toast" class="hidden pointer-events-auto"></div>
</div>

<!-- ============================================
     STYLING CSS
     ============================================ -->
<style>
    /* ==================== MODAL STYLES ==================== */
    
    /* Modal main container */
    #logoutModal {
        display: flex !important;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* Modal visible state */
    #logoutModal:not(.hidden) {
        opacity: 1;
        visibility: visible;
    }

    /* Modal content animation - scale and slide */
    .modal-content {
        transform: scale(0.92) translateY(-20px);
        transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    #logoutModal:not(.hidden) .modal-content {
        transform: scale(1) translateY(0);
    }

    /* Modal overlay click effect */
    .modal-overlay {
        transition: background-color 0.3s ease;
    }

    #logoutModal:not(.hidden) .modal-overlay:hover {
        background-color: rgba(0, 0, 0, 0.6);
    }

    /* ==================== TOAST NOTIFICATION STYLES ==================== */
    
    /* Toast container */
    #toastContainer {
        display: flex !important;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    #toastContainer:not(.hidden) {
        opacity: 1;
        visibility: visible;
    }

    /* Toast notification */
    #toast {
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        font-weight: 500;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        color: white;
    }

    /* Toast show animation */
    #toast:not(.hidden) {
        animation: slideInUp 0.4s ease forwards;
    }

    /* Toast hide animation */
    #toast.hidden {
        animation: slideOutDown 0.4s ease forwards;
    }

    /* Success toast (Green) */
    #toast.toast-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }

    /* Error/Cancel toast (Red) */
    #toast.toast-error {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    }

    /* ==================== KEYFRAMES ANIMATIONS ==================== */
    
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideOutDown {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(40px);
        }
    }

    /* ==================== BUTTON STYLES ==================== */
    
    /* Button smooth transitions */
    button {
        transition: all 0.2s ease;
    }

    button:active {
        transform: scale(0.98);
    }

    /* ==================== RESPONSIVE DESIGN ==================== */
    
    @media (max-width: 640px) {
        .modal-content {
            border-radius: 1rem;
        }
        
        .modal-header,
        .modal-body,
        .modal-footer {
            padding: 1rem;
        }

        #toast {
            max-width: 90vw;
            font-size: 0.875rem;
        }

        .modal-footer {
            flex-direction: column;
        }

        .modal-footer button {
            width: 100%;
        }
    }

    /* ==================== ACCESSIBILITY ==================== */
    
    /* Focus styles untuk keyboard navigation */
    button:focus,
    .modal-overlay:focus {
        outline: 2px solid #3b82f6;
        outline-offset: 2px;
    }

    /* Smooth color transitions */
    * {
        transition: color 0.2s ease;
    }
</style>

<!-- ============================================
     JAVASCRIPT LOGIC
     ============================================ -->
<script>
    // IIFE untuk encapsulation dan avoid global namespace pollution
    (function() {
        // ==================== ELEMENT REFERENCES ====================
        const logoutBtn = document.getElementById('logoutBtn');
        const logoutModal = document.getElementById('logoutModal');
        const modalCancelBtn = document.getElementById('modalCancelBtn');
        const modalOkBtn = document.getElementById('modalOkBtn');
        const toast = document.getElementById('toast');
        const toastContainer = document.getElementById('toastContainer');
        const modalOverlay = logoutModal?.querySelector('.modal-overlay');

        // Safety check
        if (!logoutBtn || !logoutModal) {
            console.warn('Logout button atau modal tidak ditemukan');
            return;
        }

        // ==================== EVENT: LOGOUT BUTTON CLICK ====================
        logoutBtn.addEventListener('click', (e) => {
            e.preventDefault();
            console.log('🔐 Logout button diklik');

            // IF-ELSE: Validasi element
            if (logoutBtn && logoutModal) {
                // Show modal dengan smooth transition
                setTimeout(() => {
                    logoutModal.classList.remove('hidden');
                    console.log('✅ Modal konfirmasi logout ditampilkan');
                }, 100);
            } else {
                console.error('❌ Element logout tidak lengkap');
                showToast('Terjadi kesalahan', 'error');
            }
        });

        // ==================== EVENT: CANCEL BUTTON CLICK ====================
        modalCancelBtn?.addEventListener('click', () => {
            console.log('❌ Button Batal diklik');

            // IF-ELSE: Cek jika modal ada
            if (logoutModal) {
                logoutModal.classList.add('hidden');
                showToast('Logout dibatalkan!', 'error');
                console.log('✅ Modal ditutup, notifikasi dibatalkan ditampilkan');
            } else {
                console.error('❌ Modal tidak ditemukan');
            }
        });

        // ==================== EVENT: OK BUTTON CLICK ====================
        modalOkBtn?.addEventListener('click', (e) => {
            // Cegah form submit default agar bisa tampil toast dulu
            e.preventDefault();
            console.log('✅ Button OK diklik');

            // IF-ELSE: Cek jika modal ada
            if (logoutModal) {
                logoutModal.classList.add('hidden');
                showToast('Berhasil logout!', 'success');
                console.log('✅ Modal ditutup, notifikasi success ditampilkan');

                // Wait untuk toast animation sebelum logout
                setTimeout(() => {
                    const logoutForm = document.getElementById('logoutForm');
                    
                    // IF-ELSE: Cek jika form ada
                    if (logoutForm) {
                        logoutForm.submit();
                        console.log('🚀 Form logout disubmit, redirect ke logout route');
                    } else {
                        console.error('❌ Form logout tidak ditemukan');
                    }
                }, 1500); // 1.5 detik untuk toast animation
            } else {
                console.error('❌ Modal tidak ditemukan');
            }
        });

        // ==================== EVENT: OVERLAY CLICK ====================
        modalOverlay?.addEventListener('click', () => {
            console.log('🔲 Overlay diklik');

            // IF-ELSE: Close modal saat overlay diklik
            if (logoutModal) {
                logoutModal.classList.add('hidden');
                console.log('✅ Modal ditutup via overlay');
            }
        });

        // ==================== EVENT: KEYBOARD ESCAPE ====================
        document.addEventListener('keydown', (e) => {
            // IF-ELSE: Close modal saat ESC ditekan
            if (e.key === 'Escape' && !logoutModal.classList.contains('hidden')) {
                logoutModal.classList.add('hidden');
                console.log('⌨️ ESC ditekan, modal ditutup');
            }
        });

        // ==================== FUNCTION: SHOW TOAST ====================
        /**
         * Menampilkan toast notification dengan smooth animation
         * @param {string} message - Pesan yang ditampilkan
         * @param {string} type - Tipe toast ('success' atau 'error')
         */
        function showToast(message, type) {
            // Validasi input
            if (!message || !type) {
                console.error('❌ Toast: message atau type tidak valid');
                return;
            }

            // Set pesan
            toast.textContent = message;

            // Reset classes
            toast.className = '';

            // Set base classes
            toast.classList.add(
                'pointer-events-auto',
                'text-white',
                'px-6',
                'py-3',
                'rounded-lg',
                'shadow-lg',
                'font-medium',
                'text-center'
            );

            // IF-ELSE: Tentukan warna berdasarkan type
            if (type === 'success') {
                toast.classList.add('toast-success');
                console.log('✅ Toast SUCCESS ditampilkan');
            } else if (type === 'error') {
                toast.classList.add('toast-error');
                console.log('⚠️ Toast ERROR ditampilkan');
            } else {
                toast.classList.add('bg-gray-800');
                console.log('ℹ️ Toast DEFAULT ditampilkan');
            }

            // Tampilkan container dan toast
            toast.classList.remove('hidden');
            toastContainer.classList.remove('hidden');

            // Sembunyikan setelah 3 detik
            setTimeout(() => {
                // IF-ELSE: Cek jika toast masih ada
                if (toast) {
                    toast.classList.add('hidden');
                    console.log('🔄 Toast disembunyikan setelah 3 detik');
                }
            }, 3000);
        }

        // ==================== EXPOSE FUNCTION ====================
        // Expose showToast ke global scope jika diperlukan
        window.showToastNotification = showToast;
        console.log('🎉 Logout Confirmation Component initialized');
    })();
</script>
