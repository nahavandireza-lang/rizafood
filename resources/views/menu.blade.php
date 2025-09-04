<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منوی کامل ریضافود</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Vazirmatn', sans-serif; }
        .category-section:not(:last-child) { margin-bottom: 5rem; }
        .item-card {
            background-color: #1f1f22;
            border: 1px solid #3a3a3d;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease-in-out;
        }
        .item-card:hover {
            border-color: #fcd34d;
            transform: translateY(-5px) scale(1.01);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
        }
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
        .text-gradient {
            background-image: linear-gradient(to right, #facc15, #fde047);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.4));
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
        <h1 class="text-6xl font-black text-center mb-16 text-yellow-500 drop-shadow">منوی کامل امپراطوری</h1>

        @foreach ($categories as $category)
            <section id="category-{{ $category->id }}" class="category-section">
                <h2 class="text-5xl font-extrabold text-right mb-10 pb-2 inline-block text-gradient drop-shadow-md">{{ $category->title }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @forelse ($category->items as $item)
                        <a href="{{ route('item.show', $item->id) }}" class="item-card rounded-xl p-6 flex flex-col justify-between transform hover:scale-105 transition-transform duration-300 group">
                            <div>
                                <h3 class="text-3xl font-bold mb-2 text-yellow-400 group-hover:text-yellow-500 transition-colors drop-shadow-sm">{{ $item->title }}</h3>
                                <p class="text-gray-300 text-base mb-4">{{ $item->description }}</p>
                            </div>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-4xl font-black text-white drop-shadow">{{ number_format($item->price) }} تومان</span>
                                <button class="px-8 py-2 rounded-full btn-primary font-bold transition-colors">نمایش جزئیات</button>
                            </div>
                        </a>
                    @empty
                        <p class="col-span-full text-center text-gray-500 text-lg">در حال حاضر آیتمی در این دسته‌بندی وجود ندارد.</p>
                    @endforelse
                </div>
            </section>
        @endforeach
    </main>

    <footer class="bg-[#1a1a1e] text-gray-400 py-10 text-center mt-20">
        <p class="text-base">&copy; 2025 فست فود سالم ریضافود. تمامی حقوق محفوظ است.</p>
    </footer>

</body>
</html>