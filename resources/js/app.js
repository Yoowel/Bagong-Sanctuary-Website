
const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.getElementById('nav-links');

// Toggle menu pada perangkat mobile
menuToggle.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('active');

    menuToggle.setAttribute('aria-expanded', isOpen);
    menuToggle.setAttribute(
        'aria-label',
        isOpen ? 'Tutup menu' : 'Buka menu'
    );
});

// Tutup menu setelah tautan navigasi diklik
navLinks.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Buka menu');
    });
});

// Tahun otomatis pada footer
document.getElementById('year').textContent =
    new Date().getFullYear();
