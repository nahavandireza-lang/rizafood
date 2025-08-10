<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create categories
        $categories = [
            [
                'title' => 'پیتزا',
                'image' => null,
                'sort' => 1,
                'enabled' => true,
            ],
            [
                'title' => 'برگر',
                'image' => null,
                'sort' => 2,
                'enabled' => true,
            ],
            [
                'title' => 'مرغ بریان',
                'image' => null,
                'sort' => 3,
                'enabled' => true,
            ],
            [
                'title' => 'پیده',
                'image' => null,
                'sort' => 4,
                'enabled' => true,
            ],
            [
                'title' => 'ساندویچ',
                'image' => null,
                'sort' => 5,
                'enabled' => true,
            ],
            [
                'title' => 'سیب زمینی',
                'image' => null,
                'sort' => 6,
                'enabled' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
