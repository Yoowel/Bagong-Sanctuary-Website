
@extends('layouts.app')

@section('title', 'Katalog Produk | Bagong Sanctuary')

@section('description', 'Jelajahi koleksi patung rohani Katolik Bagong Sanctuary.')

@section('body-class', 'catalog-page')

@section('skip-link')
    <a href="#katalog" class="skip-link">
        Lewati navigasi
    </a>
@endsection

@section('main-id', 'katalog')

@section('content')

    <section class="section catalog-section" id="katalog">

        <div class="section-heading">
            <span class="eyebrow">KOLEKSI BAGONG SANCTUARY</span>

            <h1>Katalog Patung Rohani</h1>

            <p class="lead">
                Temukan patung rohani
            </p>
        </div>

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

        <div class="catalog-action">
            <a href="{{ route('home') }}" class="button">
                Kembali ke Beranda
            </a>
        </div>

    </section>

@endsection
