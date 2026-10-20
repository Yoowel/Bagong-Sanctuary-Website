
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bagong Sanctuary menyediakan berbagai patung fiber rohani.">
    <title>Bagong Sanctuary</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="navbar">
        <a href="#" class="logo">Bagong Sanctuary</a>

        <button class="menu-toggle"
                id="menu-toggle"
                aria-label="Buka menu"
                aria-expanded="false">
            ☰
        </button>

        <nav class="nav-links" id="nav-links">
            <a href="#beranda">Beranda</a>
            <a href="#produk">Produk</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#lokasi">Lokasi</a>
        </nav>
    </header>

    <main>
        <section class="hero" id="beranda">
            <div class="hero-content">
                <span class="eyebrow">Selamat Datang di Bagong Sanctuary</span>

                <h1>Patung Rohani Katolik</h1>

                <p>
                    Menyediakan berbagai patung fiber rohani
                    dengan kualitas terbaik
                </p>
            </div>
        </section>


        <section class="section" id="produk">
            <div class="section-heading">
                <span class="eyebrow">Koleksi Pilihan</span>
                <h2>Produk Unggulan</h2>
                <p>
                    Beberapa pilihan patung rohani dari Bagong Sanctuary.
                </p>
            </div>

            <div class="product-grid">
                <article class="product-card">
                    <div class="product-image">
                        <span>Foto Produk</span>
                    </div>
                    <div class="product-info">
                        <h3>Patung</h3>
                        <p>deskripsi</p>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <span>Foto Produk</span>
                    </div>
                    <div class="product-info">
                        <h3>Patung</h3>
                        <p>deskripsi</p>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <span>Foto Produk</span>
                    </div>
                    <div class="product-info">
                        <h3>Patung</h3>
                        <p>deskripsi</p>
                    </div>
                </article>
            </div>

            <div class="catalog-action">
                <a href="{{ route('katalog') }}" class="button button-outline">
                    Lihat Semua Produk
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </section>

        <section class="about" id="tentang">
            <div class="about-content">
                <span class="eyebrow">Tentang Kami</span>
                <h2>Mengenal Bagong Sanctuary</h2>
                <p>
                    Bagong Sanctuary
                </p>
            </div>
        </section>

        <section class="section location" id="lokasi">
            <div class="section-heading">
                <span class="eyebrow">Temukan Kami</span>
                <h2>Lokasi Toko</h2>
                <p>
                    Kunjungi toko kami untuk mendapatkan informasi
                    lebih lanjut mengenai produk.
                </p>
                <p class="location-note">
                    map
                </p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <span id="year"></span> Bagong Sanctuary.</p>
    </footer>

</body>
</html>
