<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bagong Sanctuary menyediakan berbagai patung fiber rohani Katolik.">
    <meta name="theme-color" content="#F8F6F1">

    <title>Bagong Sanctuary</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <a href="#beranda" class="skip-link">Lewati ke konten</a>

    <header class="navbar">
        <a href="#beranda" class="logo" aria-label="Bagong Sanctuary Beranda">
            BAGONG <span>Sanctuary</span>
        </a>

        <button
            class="menu-toggle"
            id="menu-toggle"
            aria-label="Buka menu"
            aria-expanded="false"
            aria-controls="nav-links"
            type="button">
            ☰
        </button>

        <nav class="nav-links" id="nav-links" aria-label="Navigasi utama">
            <a href="#beranda">Beranda</a>
            <a href="#produk">Koleksi</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#lokasi">Lokasi</a>
        </nav>
    </header>

    <main id="beranda">

        <section class="hero wrap">
            <div class="hero-content">
                <span class="eyebrow">Bagong Sanctuary · Patung Rohani</span>

                <h1>Patung Rohani</h1>

                <p class="lead">
                    Menyediakan berbagai produk patung rohani
                </p>

                <div class="hero-actions">
                    <a href="#produk" class="button">
                        Koleksi
                    </a>

                    <a href="#tentang" class="button button-outline">
                        Tentang Kami
                    </a>
                </div>
            </div>

            <div class="hero-visual" aria-label="Koleksi patung rohani">
                <div class="visual-frame">
                    <span class="visual-symbol" aria-hidden="true">✝</span>
                    <span class="visual-caption">
                        Koleksi Patung Rohani
                    </span>
                </div>

                <div class="visual-frame secondary">
                    <span class="visual-symbol" aria-hidden="true">✝</span>
                    <span class="visual-caption">
                        Sacred Art
                    </span>
                </div>
            </div>
        </section>

        <section class="section wrap" id="produk">
            <div class="section-heading">
                <div class="heading-copy">
                    <span class="eyebrow">Koleksi Pilihan</span>
                    <h2>Produk</h2>
                    <p>
                        Kumpulan koleksi patung rohani yang tersedia di Bagong Sanctuary
                    </p>
                </div>
            </div>

            <div class="product-grid">
                <article class="product-card">
                        <div class="product-image">
                            <span>Foto produk</span>
                        </div>
                    </a>

                    <div class="product-info">
                        <div>
                            <h3>Patung Yesus</h3>
                            <p>Koleksi patung rohani</p>
                        </div>
                    </div>
                </article>

                <article class="product-card">
                        <div class="product-image">
                            <span>Foto produk</span>
                        </div>
                    </a>

                    <div class="product-info">
                        <div>
                            <h3>Patung Bunda Maria</h3>
                            <p>Koleksi devosi Maria</p>
                        </div>
                    </div>
                </article>

                <article class="product-card">
                        <div class="product-image">
                            <span>Foto produk</span>
                        </div>
                    </a>

                    <div class="product-info">
                        <div>
                            <h3>Patung Para Santo</h3>
                            <p>Koleksi orang kudus</p>
                        </div>
                    </div>
                </article>

                <article class="product-card">
                        <div class="product-image">
                            <span>Foto produk</span>
                        </div>
                    </a>

                    <div class="product-info">
                        <div>
                            <h3>Patung Para Santo</h3>
                            <p>Koleksi orang kudus</p>
                        </div>
                    </div>
                </article>                
            </div>

            <div class="catalog-action">
                <a href="{{ route('catalog') }}" class="button button-outline">
                    Lihat Semua Produk
                    <span aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="about" id="tentang">
            <div class="wrap about-content">
                <div>
                    <span class="eyebrow">Tentang Kami</span>
                    <h2>MENYEDIAKAN PRODUK ROHANI BERKUALITAS</h2>
                </div>

                <div class="about-copy">
                    <p>
                        Bagong Sanctuary menghadirkan koleksi patung
                        rohani Katolik untuk membantu umat menghidupkan
                        nilai iman dalam kehidupan sehari-hari.
                    </p>

                    <p>
                        Kami ingin setiap karya memiliki tempat yang
                        bermakna, baik di rumah, ruang doa, maupun tempat
                        ibadah.
                    </p>

                    <a href="#lokasi" class="button">
                        Temukan Kami
                    </a>
                </div>
            </div>
        </section>

        <section class="section location" id="lokasi">
            <div class="wrap">
                <div class="section-heading">
                    <span class="eyebrow">Temukan Kami</span>
                    <h2>Kunjungi Bagong Sanctuary.</h2>
                </div>

                <div class="location-note">
                    Lokasi toko akan ditampilkan di sini
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="wrap">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#beranda" class="logo">
                        BAGONG <span>Sanctuary</span>
                    </a>

                    <p>
                        Koleksi patung rohani Katolik
                    </p>
                </div>

                <div>
                    <h3>Navigasi</h3>
                    <a href="#beranda">Beranda</a>
                    <a href="#produk">Koleksi</a>
                    <a href="#tentang">Tentang Kami</a>
                </div>

                <div>
                    <h3>Informasi</h3>
                    <a href="{{ route('catalog') }}">Katalog Produk</a>
                    <a href="#lokasi">Lokasi Toko</a>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; <span id="year"></span> Bagong Sanctuary.
                Hak cipta dilindungi.
            </div>
        </div>
    </footer>

</body>
</html>
