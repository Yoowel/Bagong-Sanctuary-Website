
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk | Bagong Sanctuary</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="navbar">
        <a href="{{ route('home') }}" class="logo">
            Bagong Sanctuary
        </a>

        <a href="{{ route('home') }}" class="button">
            Kembali ke Beranda
        </a>
    </header>

    <main>
        <section class="section" id="katalog">
            <div class="section-heading">
                <span class="eyebrow">Katalog Lengkap</span>
                <h1>Semua Produk Kami</h1>
                <p>
                    Jelajahi koleksi patung rohani Bagong Sanctuary.
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
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <span id="year"></span> Bagong Sanctuary.</p>
    </footer>

</body>
</html>
