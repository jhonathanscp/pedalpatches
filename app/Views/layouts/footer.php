    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // ─── User Dropdown Toggle ───
        const trigger = document.getElementById('user-dropdown-trigger');
        const menu = document.getElementById('user-dropdown-menu');

        if (trigger && menu) {
            trigger.addEventListener('click', (e) => {
                e.stopPropagation();
                const isOpen = menu.classList.contains('opacity-100');

                if (isOpen) {
                    closeDropdown();
                } else {
                    openDropdown();
                }
            });

            document.addEventListener('click', (e) => {
                if (!menu.contains(e.target) && !trigger.contains(e.target)) {
                    closeDropdown();
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeDropdown();
            });

            function openDropdown() {
                menu.classList.remove('opacity-0', 'invisible', 'scale-95');
                menu.classList.add('opacity-100', 'visible', 'scale-100');
                trigger.setAttribute('aria-expanded', 'true');
            }

            function closeDropdown() {
                menu.classList.add('opacity-0', 'invisible', 'scale-95');
                menu.classList.remove('opacity-100', 'visible', 'scale-100');
                trigger.setAttribute('aria-expanded', 'false');
            }
        }

        // ─── Mobile Search Toggle ───
        const searchToggle = document.getElementById('mobile-search-toggle');
        const searchPanel = document.getElementById('mobile-search-panel');

        if (searchToggle && searchPanel) {
            searchToggle.addEventListener('click', () => {
                const isOpen = searchPanel.classList.contains('max-h-40');

                if (isOpen) {
                    searchPanel.classList.remove('max-h-40', 'opacity-100');
                    searchPanel.classList.add('max-h-0', 'opacity-0');
                } else {
                    searchPanel.classList.remove('max-h-0', 'opacity-0');
                    searchPanel.classList.add('max-h-40', 'opacity-100');
                    searchPanel.querySelector('input')?.focus();
                }
            });
        }
    });
    </script>
</body>
</html>