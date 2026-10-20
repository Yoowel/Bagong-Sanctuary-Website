const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.getElementById('nav-links');
const year = document.getElementById('year');

// Menu navigasi pada perangkat mobile
if (menuToggle && navLinks) {
    menuToggle.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('active');

        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.setAttribute(
            'aria-label',
            isOpen ? 'Tutup menu' : 'Buka menu'
        );

        menuToggle.textContent = isOpen ? '✕' : '☰';
    });

    navLinks.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');

            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'Buka menu');
            menuToggle.textContent = '☰';
        });
    });

    // Tutup menu jika pengguna kembali ke layar desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth > 860) {
            navLinks.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'Buka menu');
            menuToggle.textContent = '☰';
        }
    });
}

// Tahun otomatis pada footer
if (year) {
    year.textContent = new Date().getFullYear();
}
