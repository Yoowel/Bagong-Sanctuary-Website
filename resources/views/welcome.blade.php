
@extends('layouts.app')

@section('title', 'Beranda | Bagong Sanctuary')

@section('description', 'Bagong Sanctuary menyediakan berbagai patung fiber rohani Katolik.')

@section('content')

    <section class="hero wrap" id="beranda">
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
            </div>

            <div class="visual-frame secondary">
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

                <div class="product-info">
                    <div>
                        <h3>Patung Para Santo</h3>
                        <p>Koleksi orang kudus</p>
                    </div>
                </div>
            </article>
        </div>

        <div class="catalog-action">
            <a href="{{ route('katalog') }}" class="button button-outline">
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
                    rohani Katolik
                </p>

                <p>
                    Bagong Sanctuary menghadirkan koleksi patung
                    rohani Katolik
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
                Lokasi toko
            </div>
        </div>
    </section>

@endsection
