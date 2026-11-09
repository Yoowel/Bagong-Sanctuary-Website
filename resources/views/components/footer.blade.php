<footer class="footer">

    @if (request()->routeIs('katalog'))

        <p>
            &copy; <span id="year"></span> Bagong Sanctuary.
            Seluruh hak cipta dilindungi.
        </p>

    @else

        <div class="wrap">
            <div class="footer-grid">

                <div class="footer-brand">
                    <a href="{{ route('home') }}#beranda" class="logo">
                        BAGONG <span>Sanctuary</span>
                    </a>

                    <p>
                        Koleksi patung rohani Katolik
                    </p>
                </div>

                <div>
                    <h3>Navigasi</h3>
                    <a href="{{ route('home') }}#beranda">Beranda</a>
                    <a href="{{ route('home') }}#produk">Koleksi</a>
                    <a href="{{ route('home') }}#tentang">Tentang Kami</a>
                </div>

                <div>
                    <h3>Informasi</h3>
                    <a href="{{ route('katalog') }}">Katalog Produk</a>
                    <a href="{{ route('home') }}#lokasi">Lokasi Toko</a>
                </div>

            </div>

            <div class="footer-bottom">
                &copy; <span id="year"></span> Bagong Sanctuary.
                Hak cipta dilindungi.
            </div>
        </div>

    @endif

</footer>