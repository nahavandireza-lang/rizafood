<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item->title }} - ریضافود</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Vazirmatn', sans-serif; }
        .info-card {
            background: #1f1f22; /* پس‌زمینه کارت‌ها کمی روشن‌تر */
            border: 1px solid #3a3a3d; /* بوردر ظریف‌تر */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4); /* سایه عمیق اما نرم‌تر */
            border-radius: 0.75rem; /* rounded-xl */
        }
        .info-item { @apply flex justify-between items-center py-3 border-b border-zinc-700; } /* پدینگ بیشتر */
        .info-item:last-child { border-bottom: none; }
        .nutritional-icon { width: 24px; height: 24px; display: inline-block; vertical-align: middle; margin-left: 8px; }
        .nutritional-info ul { list-style: none; padding: 0; }
        .nutritional-info ul li { margin-bottom: 8px; }

        .btn-primary {
            background-image: linear-gradient(to right, #facc15, #fde047);
            color: #1a1a1e;
            font-weight: 800;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            transition: all 0.2s ease-in-out;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 9px 15px rgba(0, 0, 0, 0.4);
            opacity: 0.95;
        }
        .btn-secondary {
            border: 2px solid #4a4a4d;
            color: #ccc;
            background-color: transparent;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: all 0.2s ease-in-out;
        }
        .btn-secondary:hover {
            border-color: #fcd34d;
            color: #fcd34d;
            transform: translateY(-1px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
        }
        .image-frame {
            border: 3px solid #fcd34d; /* yellow-300 border */
            box-shadow: 0 0 15px rgba(252, 211, 77, 0.5), 0 10px 20px rgba(0, 0, 0, 0.5); /* glow + عمق */
            border-radius: 0.75rem; /* rounded-lg */
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-[#0c0c0e] text-white antialiased">

    <nav class="bg-[#1a1a1e] py-4 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-10 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-3xl font-black text-yellow-500 hover:text-yellow-400 transition-colors drop-shadow">ریضافود</a>
            <div class="flex space-x-4 space-x-reverse">
                <a href="{{ url('/') }}" class="text-gray-300 hover:text-white px-4 py-2 rounded-md font-medium transition-colors">صفحه اصلی</a>
                <a href="{{ route('menu') }}" class="text-white bg-yellow-500 px-4 py-2 rounded-md font-medium hover:bg-yellow-600 transition-colors drop-shadow">منو</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-10 py-16 mt-4">
        <div class="info-card rounded-xl p-10 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center">
                    @php
                        // دقیق ترین Map با نام های فارسی دیتابیس و نام فایل انگلیسی استاندارد
                        $itemImageMap = [
                            'پیده گوجه فرنگی' => 'pide-tomato.png',
                            'پیده سیب زمینی' => 'pide-potato.png',
                            'پیده پنیر' => 'pide-cheese.png',
                            'پیده سبزیجات' => 'pide-vegetables.png',
                            'پیده سوجوک' => 'pide-sujuk.png',
                            'پیده دنر گوشت' => 'pide-doner-meat.png',
                            'پیده مرغ' => 'pide-chicken.png',
                            'پیده سیر' => 'pide-garlic.png',
                            'پیده رضافود' => 'pide-rizafood.png',
                            'پیده گوشت' => 'pide-meat.png',

                            'دنر گوشت پرسی' => 'doner-meat-plate.png',
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

                            'اپتایزر' => 'appetizer.png', // برای آیتمی به اسم اپتایزر
                            'برگر' => 'burger.png', // برای آیتمی به اسم برگر (نه دسته بندی)
                            'چیکن' => 'chicken.png', // برای آیتمی به اسم چیکن (نه دسته بندی)
                            'دنر' => 'doner.png', // برای آیتمی به اسم دنر (نه دسته بندی)
                            'پیده' => 'pide.png', // برای آیتمی به اسم پیده (نه دسته بندی)
                            'پیتزا' => 'pizza.png', // برای آیتمی به اسم پیتزا (نه دسته بندی)
                        ];
                        $itemImageFile = $itemImageMap[$item->title] ?? 'logo.png';
                    @endphp
                    <img src="/img/{{ $itemImageFile }}" alt="{{ $item->title }}" class="w-full max-w-lg h-auto rounded-lg image-frame transform hover:scale-105 transition-transform duration-300">
                </div>
                <div>
                    <h1 class="text-5xl font-black text-yellow-500 mb-4 drop-shadow">{{ $item->title }}</h1>
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">{{ $item->description }}</p>

                    <div class="flex justify-between items-center bg-zinc-800 rounded-lg p-5 mb-8 shadow-md">
                        <span class="text-4xl font-black text-white drop-shadow">{{ number_format($item->price) }} تومان</span>
                        <button class="px-10 py-3 rounded-full btn-primary transform hover:scale-105">افزودن به سبد</button>
                    </div>

                    {{-- اطلاعات ارزش غذایی --}}
                    @if ($item->nutritional_info)
                        <div class="info-card p-6 mb-6">
                            <h3 class="text-2xl font-bold text-yellow-400 mb-4 drop-shadow-sm">میزان ارزش غذایی (در 100 گرم)</h3>
                            <div class="nutritional-info text-gray-300 text-lg">
                                @foreach (explode("\n", $item->nutritional_info) as $line)
                                    @if (trim($line) != '')
                                        <div class="info-item">
                                            <span>{{ trim($line) }}</span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- مواد تشکیل دهنده --}}
                    @if ($item->ingredients)
                        <div class="info-card p-6 mb-6">
                            <h3 class="text-2xl font-bold text-yellow-400 mb-4 drop-shadow-sm">مواد تشکیل دهنده</h3>
                            <p class="text-gray-300 leading-relaxed text-lg">{{ $item->ingredients }}</p>
                        </div>
                    @endif

                    {{-- مخلفات همراه --}}
                    @if ($item->accompaniments)
                        <div class="info-card p-6">
                            <h3 class="text-2xl font-bold text-yellow-400 mb-4 drop-shadow-sm">مخلفات همراه</h3>
                            <p class="text-gray-300 leading-relaxed text-lg">{{ $item->accompaniments }}</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('menu') }}" class="px-14 py-4 rounded-full btn-secondary transform hover:scale-105">بازگشت به منو</a>
        </div>
    </main>

    <footer class="bg-[#1a1a1e] text-gray-400 py-10 text-center mt-20">
        <p class="text-base">&copy; 2025 فست فود سالم ریضافود. تمامی حقوق محفوظ است.</p>
    </footer>

</body>
</html>