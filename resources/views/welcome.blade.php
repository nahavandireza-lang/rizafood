
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ریضافود - تجربه متفاوت فست فود سالم</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Vazirmatn', sans-serif; scroll-behavior: smooth; }
    .hero-shape { clip-path: polygon(0 0, 100% 0, 100% 90%, 50% 100%, 0 90%); transform: scaleY(1.05); }
    .text-gradient { background-image: linear-gradient(to right, #facc15, #fde047); -webkit-background-clip: text; -webkit-text-fill-color: transparent; filter: drop-shadow(0 4px 8px rgba(0,0,0,.4)); }
    .card-bg { background-color: #1f1f22; border: 1px solid #3a3a3d; box-shadow: 0 12px 25px rgba(0,0,0,.5); transition: all .3s cubic-bezier(0.4,0,0.2,1); position: relative; }
    .card-bg:hover { border-color: #fcd34d; transform: translateY(-8px) scale(1.01); box-shadow: 0 18px 35px rgba(0,0,0,.6); }
    .badge-discount { position: absolute; top: -14px; right: -14px; background: #f87171; color: white; font-weight: 900; padding: 8px 14px; border-radius: 9999px; font-size: 14px; z-index: 20; }
    .section-header-badge { display:inline-flex; align-items:center; background:#f87171; color:white; font-weight:900; padding:8px 14px; border-radius:9999px; font-size:14px; margin-left:12px; }
    .btn-primary { background-image: linear-gradient(to right, #facc15, #fde047); color:#1a1a1e; font-weight:800; box-shadow:0 6px 12px rgba(0,0,0,0.3); transition: all 0.2s ease-in-out; }
    .btn-primary:hover { transform: translateY(-2px); box-shadow:0 9px 15px rgba(0,0,0,0.4); opacity:.95; }
    .btn-secondary { border: 2px solid #4a4a4d; color:#ccc; background-color: transparent; box-shadow:0 4px 8px rgba(0,0,0,0.2); transition: all 0.2s ease-in-out; }
    .btn-secondary:hover { border-color:#fcd34d; color:#fcd34d; transform: translateY(-1px); box-shadow:0 6px 12px rgba(0,0,0,0.3); }
    .slide-transition { transition: opacity 1.2s ease-in-out; }
    .image-glow { filter: drop-shadow(0 0 10px rgba(252, 211, 77, 0.4)); transition: filter 0.3s ease; }

    .circle-overlay { position: absolute; border-radius: 50%; background-color: rgba(252,211,77,.1); filter: blur(10px); opacity: 0.8; animation: pulse 4s infinite ease-in-out; z-index: 5; }
    .circle-1 { top: 10%; left: 5%; width: 80px; height: 80px; }
    .circle-2 { bottom: 15%; right: 10%; width: 100px; height: 100px; }
    .circle-3 { top: 30%; right: 20%; width: 60px; height: 60px; }

    @keyframes pulse { 0% { transform: scale(0.9); opacity: 0.6; } 50% { transform: scale(1.1); opacity: 1; } 100% { transform: scale(0.9); opacity: 0.6; } }
    @keyframes fadeInSlideRight { from { opacity: 0; transform: translateX(50px); } to { opacity: 1; transform: translateX(0); } }
    @keyframes fadeInSlideLeft { from { opacity: 0; transform: translateX(-50px); } to { opacity: 1; transform: translateX(0); } }
    .animate-text-right { animation: fadeInSlideRight 1s ease-out forwards; }
    .animate-text-left { animation: fadeInSlideLeft 1s ease-out forwards; }

    .card-overlay-wrapper {
      position: relative;
      width: 200px;
      height: 200px;
      border-radius: 9999px;
      overflow: hidden;
      border: 3px solid #fcd34d;
      box-shadow: 0 0 15px rgba(252, 211, 77, 0.5), 0 10px 20px rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .card-overlay-wrapper:hover { border-color: #facc15; transform: translateY(-8px) scale(1.03); box-shadow: 0 0 25px rgba(252,211,77,0.7), 0 15px 30px rgba(0,0,0,0.6); }
    .card-overlay-wrapper img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.7; transition: all 0.3s ease-in-out; filter: brightness(0.8); }
    .card-overlay-wrapper:hover img { opacity: 1; transform: scale(1.05); filter: brightness(1); }
    .card-overlay-text { position: relative; z-index: 10; color: white; font-weight: 800; font-size: 1.75rem; text-shadow: 0 2px 8px rgba(0,0,0,0.8); }

    .footer-note { font-size: 0.95rem; color: #d1d5db; text-align: center; margin-top: 8px; }
    .footer-note strong { color: #f59e0b; }

  </style>
</head>
<body class="bg-[#0a0a0c] text-white antialiased overflow-x-hidden">

  <nav class="bg-[#1a1a1e] py-4 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-10 flex justify-between items-center">
      <a href="{{ url('/') }}" class="text-3xl font-black text-yellow-500 hover:text-yellow-400 transition-colors drop-shadow">ریضافود</a>
      <div class="flex space-x-4">
        <a href="{{ url('/') }}" class="text-gray-300 hover:text-white px-4 py-2 rounded-md font-medium transition-colors">صفحه اصلی</a>
        <a href="{{ route('menu') }}" class="text-white bg-yellow-500 px-4 py-2 rounded-md font-medium hover:bg-yellow-600 transition-colors drop-shadow">منو</a>
      </div>
    </div>
  </nav>

  <header class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-x-0 top-0 h-[700px] bg-[#1a1a1e] hero-shape z-10"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0c] via-transparent to-transparent z-20"></div>

    <div class="circle-overlay circle-1"></div>
    <div class="circle-overlay circle-2"></div>
    <div class="circle-overlay circle-3"></div>

    <div class="container mx-auto px-10 relative z-30">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="text-center lg:text-right mt-24 lg:mt-0">
          <h2 class="text-xl md:text-2xl text-yellow-400 font-bold mb-4 animate-text-right" style="animation-delay: 0.2s;">فست فود سالم ریضافود</h2>
          <h1 class="text-6xl md:text-7xl font-black leading-tight text-gradient mb-6 animate-text-right" style="animation-delay: 0.4s;">انتخاب‌های تازه و سالم</h1>
          <p class="text-lg md:text-xl text-gray-300 mt-4 max-w-lg mx-auto lg:mx-0 leading-relaxed drop-shadow-sm animate-text-right" style="animation-delay: 0.6s;">
            اولین فست فود بدون روغن در زنجان. تجربه‌ای بی‌نظیر از غذای سالم را با ما تجربه کنید.
          </p>
          <div class="mt-12 flex justify-center lg:justify-start gap-6 animate-text-right" style="animation-delay: 0.8s;">
            <a href="{{ route('menu') }}" class="px-12 py-3 rounded-full btn-primary">مشاهده منو</a>
            <a href="#footer" class="px-12 py-3 rounded-full btn-primary">تماس با ما</a>
          </div>
        </div>
        <div class="relative flex justify-center items-center h-[500px] lg:h-auto animate-text-left" style="animation-delay: 0.5s;">
          <img id="heroImage" src="{{ asset('img/hero-image.png') }}" alt="غذاهای سالم ریضافود" class="absolute z-10 w-[600px] max-w-none image-glow slide-transition">
          <div class="absolute w-80 h-80 bg-yellow-400 rounded-full blur-3xl opacity-15"></div>
        </div>
      </div>
    </div>
  </header>

 
  <!-- پیشنهادات ویژه امروز (3 تا) با تخفیف 15% و نشان بزرگ -->
<section class="relative bg-[#1a1a1e] py-24 rounded-t-[60px] -mt-20 z-40">
  <div class="container mx-auto px-10 text-center">
    @php
      $discountRate = 0.15;
      $discountPercent = (int) floor($discountRate * 100);
    @endphp
    <h2 class="text-5xl font-extrabold mb-4 text-yellow-500 drop-shadow-md" style="display:inline-flex; align-items:center;">
      پیشنهادات ویژه امروز
      <span class="section-header-badge" title="تخفیف ویژه" style="margin-left:12px;">تخفیف {{ $discountPercent }}%</span>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-6">
      @if (isset($specialOffers) && $specialOffers->count() > 0)
        @foreach ($specialOffers->take(3) as $offer)
          @php
            $price = (float) ($offer->price ?? 0);
            // محاسبه قیمت با تخفیف
$discountedPrice = (int) floor($price * (1 - $discountRate));
            $hasDiscount = $price > $discountedPrice;

            // نقشه تصاویر با fallback امن
            $offerImageMap = [
              'پیده گوجه فرنگی' => 'pide-tomato.png',
              'پیده سیب زمینی' => 'pide-potato.png',
              'پیده پنیر' => 'pide-cheese.png',
              'پیده سبزیجات' => 'pide-vegetables.png',
              'پیده سوجوک' => 'pide-sujuk.png',
              'پیده دنر گوشت' => 'pide-doner-meat.png',
              'پیده مرغ' => 'pide-chicken.png',
              'پیدۀ سیر' => 'pide-garlic.png',
              'پیده رضافود' => 'pide-rizafood.png',
              'پیده گوشت' => 'pide-meat.png',
              'دنر گوشت پرسی' => 'doner-meat-plate.png',
              'دنر گوشت' => 'doner-meat-plate.png',
              'دنر' => 'doner.png',
              'ساندویچ دنر گوشت' => 'doner-meat-sandwich.png',
              'کتف و بال' => 'wings.png',
              'پک مرغ رضافود' => 'rizafood-chicken-pack.png',
              'مرغ پرسی' => 'chicken-plate.png',
              'مرغ بریان (ساده)' => 'roasted-chicken-simple.png',
              'چیزبرگر' => 'cheeseburger.png',
              'دنر برگر' => 'doner-burger.png',
              'همبرگر (کلاسیک)' => 'classic-burger.png',
              'برگر رضافود' => 'rizafood-burger.png',
              'ماشروم برگر' => 'mushroom-burger.png',
              'دوبل برگر' => 'double-burger.png',
              'سیب پنیری' => 'cheese-fries.png',
              'سیب ساده' => 'simple-fries.png',
              'سیب رضافود' => 'rizafood-fries.png',
              'پیتزا مارگاریتا' => 'pizza-margherita.png',
              'پیتزا دنر گوشت' => 'pizza-doner-meat.png',
              'پیتزا سبزیجات' => 'pizza-vegetable.png',
              'پیتزا با مرغ (آلفردو)' => 'pizza-chicken-alfredo.png',
              'پیتزا رضافود' => 'pizza-rizafood.png',
              'پیتزا پپرونی' => 'pizza-pepperoni.png',
              'نان سیر' => 'garlic-bread.png',
              'پیتزا با گوشت' => 'pizza-meat.png',
              'اپتایزر' => 'appetizer.png',
              'برگر' => 'burger.png',
              'چیکن' => 'chicken.png',
              'دنر' => 'doner.png',
              'پیده' => 'pide.png',
              'پیتزا' => 'pizza.png',
            ];
            $imageFile = $offerImageMap[$offer->title] ?? 'logo.png';
            if (!file_exists(public_path('img/' . $imageFile))) {
              // fallback‌های امن
              $fallbacks = ['appetizer.png','appetizer1.png','dOOner.png','rocket.png','logo.png'];
              foreach ($fallbacks as $f) {
                if (file_exists(public_path('img/' . $f))) { $imageFile = $f; break; }
              }
            }
            $imagePath = asset('img/' . $imageFile);
          @endphp
          <a href="{{ route('item.show', $offer->id) }}" class="card-bg rounded-xl p-8 flex flex-col items-center text-center group relative" style="min-width:240px;">
            <div class="relative w-40 h-40 rounded-full overflow-hidden flex-shrink-0 mb-6 border-4 border-yellow-300 shadow-lg">
              @if ($hasDiscount)
                <span class="badge-discount">تخفیف {{ $discountPercent }}%</span>
              @endif
              <img src="{{ $imagePath }}" alt="{{ $offer->title }}" class="w-full h-full object-cover" />
            </div>
            <h3 class="text-3xl font-extrabold text-white mb-2">{{ $offer->title }}</h3>
            <p class="text-gray-400 text-base mb-4 leading-relaxed">{{ $offer->description }}</p>
            <span class="text-4xl font-black text-yellow-400 mb-4">{{ number_format($discountedPrice) }} تومان</span>
            @if ($hasDiscount)
              <span class="text-sm line-through text-gray-300 mb-4">{{ number_format($offer->price) }} تومان</span>
            @endif
            <button class="px-10 py-3 rounded-full btn-primary text-lg font-bold mt-2">ثبت سفارش</button>
          </a>
        @endforeach
      @else
        <p class="col-span-full text-center text-gray-500 text-lg">در حال حاضر پیشنهاد ویژه‌ای وجود ندارد.</p>
      @endif
    </div>
  </div>
</section>

  <!-- دسته‌های محبوب -->
  <section class="relative bg-[#0a0a0c] py-24 rounded-t-[60px] mt-16 z-40">
    <div class="container mx-auto px-10 text-center">
      <h2 class="text-5xl font-extrabold mb-16 text-yellow-500 drop-shadow-md">دسته‌های محبوب</h2>
      <div class="flex flex-wrap justify-center gap-12">
        @foreach ($categories as $category)
          @php
            $categoryImageMap = [
              'پیده' => 'pide.png',
              'ساندویچ و پرسی' => 'doner-meat-plate.png',
              'مرغ بریان' => 'chicken.png',
              'برگر' => 'burger.png',
              'پیش‌غذا' => 'appetizer.png',
              'پیتزا' => 'pizza.png',
            ];
            $categoryImageFile = $categoryImageMap[$category->title] ?? 'logo.png';
            if (!file_exists(public_path('img/' . $categoryImageFile))) {
              $categoryImageFile = 'logo.png';
            }
          @endphp
          <a href="{{ route('menu') }}#category-{{ $category->id }}" class="card-overlay-wrapper">
            <img src="{{ asset('img/' . $categoryImageFile) }}" alt="{{ $category->title }}">
            <span class="card-overlay-text">{{ $category->title }}</span>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <!-- اسکریپت تغییر تصاویر Hero با reduced-motion -->
  <script>
    const heroImage = document.getElementById('heroImage');
    const images = [
      '{{ asset('img/hero-image.png') }}',
      '{{ asset('img/burger.png') }}',
      '{{ asset('img/pizza.png') }}',
      '{{ asset('img/chicken.png') }}',
      '{{ asset('img/doner.png') }}',
      '{{ asset('img/appetizer1.png') }}',
      // می‌تونی تصاویر اضافی که نداریم رو هم اضافه کنی در صورت وجود
    ];
    let currentImageIndex = 0;

    function changeHeroImage() {
      heroImage.style.opacity = 0;
      setTimeout(() => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        heroImage.src = images[currentImageIndex];
        heroImage.style.opacity = 1;
      }, 1200);
    }

    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      setInterval(changeHeroImage, 6500);
    }
  </script>

  <!-- فوتر: آدرس، تماس، اینستاگرام و مپ گوگل -->
  <footer id="footer" class="bg-[#1a1a1e] text-gray-400 py-12 text-center mt-20 border-t border-gray-700">
    <div class="container mx-auto px-6 md:px-10">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start justify-items-center">
        <div class="text-right">
          <h3 class="text-2xl font-bold text-white mb-2">آدرس</h3>
          <p>زنجان، بلوار آزادی، خیابان کشاورز</p>
          <h3 class="text-2xl font-bold text-white mt-4 mb-2">تماس</h3>
          <p>0920 241 3209</p>
          <p class="mt-2 text-sm text-yellow-300">Instagram: @rizafood.ir</p>
        </div>

        <div class="border-2 border-red-500 rounded-lg p-2 w-full md:w-auto">
          <!-- کادر قرمز دور گوگل م