@extends('layouts.app')

@section('content')
    <div class="header">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="ریضا فود" class="logo-image">
        </div>
    </div>

    <div class="main-container">
        @foreach($categories as $category)
            <div class="category-section">
                <div class="category-header">
                    <h2 class="category-title">{{ $category->title }}</h2>
                </div>

                <div class="menu-items">
                    @foreach($category->items as $item)
                        <div class="menu-item">
                            <div class="item-icon">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" width="32" height="32">
                                @else
                                    🍕
                                @endif
                            </div>
                            <div class="item-details">
                                <h3 class="item-title">{{ $item->title }}</h3>
                                <p class="item-description">{{ $item->description }}</p>
                            </div>
                            <div class="item-price">{{ number_format($item->price) }} تومان</div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <footer class="footer">
        <div class="footer-content">
            <h1 class="brand-name">ریضا فود</h1>
            <p class="tagline">غذا رضا فضا</p>
            <div class="contact-info">
                <p class="location">زنجان، بلوار آزادی، خیابان کشاورز</p>
                <p class="phone pill">۰۹۲۰۲۴۱۳۲۰۹</p>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d798.0697975348787!2d48.4956307!3d36.6650074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDM5JzU0LjAiTiA0OMKwMjknNDQuMyJF!5e0!3m2!1sen!2s!4v1628000000000!5m2!1sen!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map-iframe"></iframe>
            </div>
        </div>
    </footer>
@endsection
