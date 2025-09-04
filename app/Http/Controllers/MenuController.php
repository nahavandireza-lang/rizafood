<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // متد برای نمایش دروازه امپراطوری (صفحه اصلی)
    public function home()
    {
        $categories = Category::where('enabled', true)->orderBy('sort')->get();

        // --- بخش پیشنهادات ویژه: انتخاب آیتم های متنوع از دیتابیس ---
        // بر اساس اطلاعات دیتابیس شما، ID های 5 آیتم خاص از دسته های مختلف انتخاب شده اند.
        // اینها ID های پیشنهادی هستند. لطفاً اینها را با ID های واقعی 5 آیتمی که
        // می‌خواهید به عنوان "پیشنهاد ویژه" نمایش داده شوند و عکسشان را دارید، جایگزین کنید.
        // مثال:
        // پیده گوجه فرنگی (ID: 1), دنر گوشت پرسی (ID: 11), پک مرغ رضافود (ID: 15),
        // چیزبرگر (ID: 20), پیتزا مارگاریتا (ID: 25)
        $specialOfferIds = [1, 11, 15, 20, 25]; // ID های پیشنهادی
        $specialOffers = Item::whereIn('id', $specialOfferIds)
                             ->where('enabled', true)
                             ->orderBy('sort')
                             ->get();

        // اگر می‌خواهید 5 آیتم فعال به صورت کاملا تصادفی انتخاب شوند:
        // $specialOffers = Item::where('enabled', true)->inRandomOrder()->take(5)->get();
        // -----------------------------------------------------------------------------------

        return view('welcome', [
            'categories' => $categories,
            'specialOffers' => $specialOffers,
        ]);
    }

    // متد برای نمایش لیست کامل منو (اتاق بایگانی)
    public function index()
    {
        $categories = Category::with(['items' => function ($query) {
            $query->where('enabled', true)->orderBy('sort');
        }])->where('enabled', true)->orderBy('sort')->get();

        return view('menu', ['categories' => $categories]);
    }

    // متد برای نمایش جزئیات یک غذای خاص
    public function showItem(Item $item)
    {
        // در اینجا میتونی لاگیک بیشتری برای گرفتن عکس های مرتبط و ... اضافه کنی
        return view('item', ['item' => $item]);
    }
}