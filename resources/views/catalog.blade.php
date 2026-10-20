<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jelajahi koleksi patung rohani Katolik Bagong Sanctuary.">

    <title>Katalog Produk | Bagong Sanctuary</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="catalog-page">

    <a href="#katalog" class="skip-link">Lewati navigasi</a>

    <!-- Navbar -->
    <header class="navbar">
        <a href="{{ route('home') }}" class="logo">
            Bagong Sanctuary
        </a>

        <nav aria-label="Navigasi utama">
            <a href="{{ route('home') }}" class="button button-outline">
                &larr; Kembali ke Beranda
            </a>
        </nav>
    </header>

    <main>
        <!-- Judul katalog -->
        <section class="section catalog-section" id="katalog">
            <div class="section-heading">
                <span class="eyebrow">KOLEKSI BAGONG SANCTUARY</span>

                <h1>Katalog Patung Rohani</h1>

                <p class="lead">
                    Temukan patung rohani yang sesuai untuk ruang doa,
                    rumah, maupun tempat ibadah.
                </p>
            </div>

        <!-- Daftar produk -->
        <div class="product-grid">

            @forelse ($products as $product)

                <article class="product-card">
                    <div class="product-image">
                        @if ($product->image)
                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                            >
                        @else
                            <span>Foto Produk</span>
                        @endif
                    </div>

                    <div class="product-info">
                        <span class="eyebrow">KOLEKSI</span>

                        <h2>{{ $product->name }}</h2>

                        <p>
                            {{ $product->description }}
                        </p>

                        <p class="product-price">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                    </div>
                </article>

            @empty

                <p class="empty-message">
                    Belum ada produk yang tersedia.
                </p>

            @endforelse

        </div>

            <!-- Navigasi kembali -->
            <div class="catalog-action">
                <a href="{{ route('home') }}" class="button">
                    Kembali ke Beranda
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>
            &copy; <span id="year"></span> Bagong Sanctuary. Seluruh hak cipta dilindungi.
        </p>
    </footer>

</body>
</html>
