<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pizza category items
        $pizzaCategory = Category::where('title', 'پیتزا')->first();
        if ($pizzaCategory) {
            $pizzaItems = [
                [
                    'title' => 'نان سیر (Garlic)',
                    'description' => 'سیر مزه دار شده همراه پنیر موزارلا، اورگانو',
                    'price' => 348000,
                    'sort' => 1,
                ],
                [
                    'title' => 'پیتزا مارگریتا (Margherita)',
                    'description' => 'سس مارینارا، گوجه فرنگی، ریحان تازه، پنیر موزارلا، اورگانو',
                    'price' => 410000,
                    'sort' => 2,
                ],
                [
                    'title' => 'پیتزا چیکن آلفردو (Alfredo)',
                    'description' => 'سینه مرغ گریل، سس قارچ، قارچ، ریحون، پنیر موزرلا، اورگانو',
                    'price' => 490000,
                    'sort' => 3,
                ],
                [
                    'title' => 'پیتزا سبزیجات (Vegetariana)',
                    'description' => 'بروکلی، کدو، فلفل دلمه، قارچ، زیتون، گوجه چری، پنیر موزارلا، پنیر گودا',
                    'price' => 440000,
                    'sort' => 4,
                ],
                [
                    'title' => 'پیتزا پپرونی (Pepperoni)',
                    'description' => 'پپرونی تند، سس سالسا، فلفل هالوپینو، پنیر موزارلا',
                    'price' => 460000,
                    'sort' => 5,
                ],
                [
                    'title' => 'پیتزا سیرو استیک (Filetto)',
                    'description' => 'گوشت راسته، سس سیر، سس مارینارا، پنیر موزارلا، زیتون، اورگانو',
                    'price' => 520000,
                    'sort' => 6,
                ],
                [
                    'title' => 'پیتزا کباب ترکی (doner)',
                    'description' => 'گوشت دونر ورقه ای،قارچ،فلفل دلمه،پنیر موزارلا،سس مارینارا،اورگانو',
                    'price' => 505000,
                    'sort' => 7,
                ],
                [
                    'title' => 'پیتزا بیف رولتی (calzone)',
                    'description' => 'بیف رست شده، سس قارچ، پنیر موزارلا',
                    'price' => 530000,
                    'sort' => 8,
                ],
            ];

            foreach ($pizzaItems as $item) {
                Item::create([
                    'title' => $item['title'],
                    'category_id' => $pizzaCategory->id,
                    'image' => null,
                    'price' => $item['price'],
                    'description' => $item['description'],
                    'sort' => $item['sort'],
                    'enabled' => true,
                ]);
            }
        }

        // Burger category items
        $burgerCategory = Category::where('title', 'برگر')->first();
        if ($burgerCategory) {
            $burgerItems = [
                [
                    'title' => 'همبرگر',
                    'description' => 'همبرگر کلاسیک',
                    'price' => 170000,
                    'sort' => 1,
                ],
                [
                    'title' => 'چیزبرگر',
                    'description' => 'همبرگر با پنیر',
                    'price' => 220000,
                    'sort' => 2,
                ],
                [
                    'title' => 'ماشروم برگر',
                    'description' => 'همبرگر با قارچ',
                    'price' => 230000,
                    'sort' => 3,
                ],
                [
                    'title' => 'دنر برگر',
                    'description' => 'همبرگر با گوشت دنر',
                    'price' => 260000,
                    'sort' => 4,
                ],
                [
                    'title' => 'دوبل برگر',
                    'description' => 'همبرگر با دو لایه گوشت',
                    'price' => 300000,
                    'sort' => 5,
                ],
                [
                    'title' => 'برگر رضافود',
                    'description' => 'برگر مخصوص رضافود',
                    'price' => 370000,
                    'sort' => 6,
                ],
            ];

            foreach ($burgerItems as $item) {
                Item::create([
                    'title' => $item['title'],
                    'category_id' => $burgerCategory->id,
                    'image' => null,
                    'price' => $item['price'],
                    'description' => $item['description'],
                    'sort' => $item['sort'],
                    'enabled' => true,
                ]);
            }
        }

        // Chicken category items
        $chickenCategory = Category::where('title', 'مرغ بریان')->first();
        if ($chickenCategory) {
            $chickenItems = [
                [
                    'title' => 'مرغ بریان (بدون دورچین)',
                    'description' => 'مرغ بریان بدون دورچین',
                    'price' => 0, // Price not provided
                    'sort' => 1,
                ],
                [
                    'title' => 'ران مرغ',
                    'description' => 'ران مرغ بریان',
                    'price' => 0, // Price not provided
                    'sort' => 2,
                ],
                [
                    'title' => 'کتف و بال',
                    'description' => 'کتف و بال مرغ بریان',
                    'price' => 0, // Price not provided
                    'sort' => 3,
                ],
                [
                    'title' => 'مرغ پرسی (نصف مرغ با دورچین)',
                    'description' => 'نصف مرغ بریان با دورچین',
                    'price' => 0, // Price not provided
                    'sort' => 4,
                ],
                [
                    'title' => 'پک مرغ رضافود',
                    'description' => 'دورچین،سس،نان،سیب زمینی',
                    'price' => 0, // Price not provided
                    'sort' => 5,
                ],
            ];

            foreach ($chickenItems as $item) {
                Item::create([
                    'title' => $item['title'],
                    'category_id' => $chickenCategory->id,
                    'image' => null,
                    'price' => $item['price'],
                    'description' => $item['description'],
                    'sort' => $item['sort'],
                    'enabled' => true,
                ]);
            }
        }

        // Pide category items
        $pideCategory = Category::where('title', 'پیده')->first();
        if ($pideCategory) {
            $pideItems = [
                [
                    'title' => 'پیده پنیر',
                    'description' => 'پیده با پنیر',
                    'price' => 160000,
                    'sort' => 1,
                ],
                [
                    'title' => 'پیده سیر',
                    'description' => 'پیده با سیر',
                    'price' => 180000,
                    'sort' => 2,
                ],
                [
                    'title' => 'پیده گوجه فرنگی',
                    'description' => 'پیده با گوجه فرنگی',
                    'price' => 190000,
                    'sort' => 3,
                ],
                [
                    'title' => 'پیده سیب زمینی',
                    'description' => 'پیده با سیب زمینی',
                    'price' => 190000,
                    'sort' => 4,
                ],
                [
                    'title' => 'پیده سبزیجات',
                    'description' => 'پیده با سبزیجات',
                    'price' => 210000,
                    'sort' => 5,
                ],
                [
                    'title' => 'پیده سوجوک',
                    'description' => 'پیده با سوجوک',
                    'price' => 230000,
                    'sort' => 6,
                ],
                [
                    'title' => 'پیده مرغ',
                    'description' => 'پیده با مرغ',
                    'price' => 250000,
                    'sort' => 7,
                ],
                [
                    'title' => 'پیده گوشت',
                    'description' => 'پیده با گوشت',
                    'price' => 390000,
                    'sort' => 8,
                ],
                [
                    'title' => 'پیده دنر گوشت',
                    'description' => 'پیده با دنر گوشت',
                    'price' => 280000,
                    'sort' => 9,
                ],
                [
                    'title' => 'پیده رضافود',
                    'description' => 'پیده مخصوص رضافود',
                    'price' => 300000,
                    'sort' => 10,
                ],
            ];

            foreach ($pideItems as $item) {
                Item::create([
                    'title' => $item['title'],
                    'category_id' => $pideCategory->id,
                    'image' => null,
                    'price' => $item['price'],
                    'description' => $item['description'],
                    'sort' => $item['sort'],
                    'enabled' => true,
                ]);
            }
        }

        // Sandwich category items
        $sandwichCategory = Category::where('title', 'ساندویچ')->first();
        if ($sandwichCategory) {
            $sandwichItems = [
                [
                    'title' => 'ساندویچ دنر گوشت',
                    'description' => 'ساندویچ با دنر گوشت',
                    'price' => 160000,
                    'sort' => 1,
                ],
                [
                    'title' => 'دنر گوشت پرسی ۲۵۰ گرم',
                    'description' => 'دنر گوشت پرسی ۲۵۰ گرم',
                    'price' => 390000,
                    'sort' => 2,
                ],
                [
                    'title' => 'ساندویچ مرغ',
                    'description' => 'ساندویچ با مرغ',
                    'price' => 190000,
                    'sort' => 3,
                ],
                [
                    'title' => 'ساندویچ رست بیف',
                    'description' => 'ساندویچ با رست بیف',
                    'price' => 290000,
                    'sort' => 4,
                ],
            ];

            foreach ($sandwichItems as $item) {
                Item::create([
                    'title' => $item['title'],
                    'category_id' => $sandwichCategory->id,
                    'image' => null,
                    'price' => $item['price'],
                    'description' => $item['description'],
                    'sort' => $item['sort'],
                    'enabled' => true,
                ]);
            }
        }

        // French Fries category items
        $friesCategory = Category::where('title', 'سیب زمینی')->first();
        if ($friesCategory) {
            $friesItems = [
                [
                    'title' => 'سیب ساده',
                    'description' => 'سیب زمینی سرخ شده ساده',
                    'price' => 120000,
                    'sort' => 1,
                ],
                [
                    'title' => 'سیب پنیری',
                    'description' => 'سیب زمینی سرخ شده با پنیر',
                    'price' => 170000,
                    'sort' => 2,
                ],
                [
                    'title' => 'سیب رضافود',
                    'description' => 'سیب تنوری، سس قارچ، دنر کباب، پنیر موزارلا',
                    'price' => 280000,
                    'sort' => 3,
                ],
            ];

            foreach ($friesItems as $item) {
                Item::create([
                    'title' => $item['title'],
                    'category_id' => $friesCategory->id,
                    'image' => null,
                    'price' => $item['price'],
                    'description' => $item['description'],
                    'sort' => $item['sort'],
                    'enabled' => true,
                ]);
            }
        }
    }
}
