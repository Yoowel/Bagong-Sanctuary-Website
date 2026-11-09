<header class="navbar">

    @if (request()->routeIs('katalog'))
        <a href="{{ route('home') }}" class="logo">
            Bagong Sanctuary
        </a>

        <nav aria-label="Navigasi utama">
            <a href="{{ route('home') }}" class="button button-outline">
                &larr; Kembali ke Beranda
            </a>
        </nav>

    @else
        <a href="{{ route('home') }}#beranda"
           class="logo"
           aria-label="Bagong Sanctuary Beranda">

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
            <a href="{{ route('home') }}#beranda">Beranda</a>
            <a href="{{ route('home') }}#produk">Koleksi</a>
            <a href="{{ route('home') }}#tentang">Tentang Kami</a>
            <a href="{{ route('home') }}#lokasi">Lokasi</a>
        </nav>
    @endif

</header>