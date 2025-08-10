<?php

return [
    'pages' => [
        'dashboard' => [
            'title' => 'داشبورد',
        ],
        'login' => [
            'title' => 'ورود',
            'heading' => 'ورود به حساب کاربری',
            'form' => [
                'email' => [
                    'label' => 'ایمیل',
                ],
                'password' => [
                    'label' => 'رمز عبور',
                ],
                'remember' => [
                    'label' => 'مرا به خاطر بسپار',
                ],
                'actions' => [
                    'authenticate' => [
                        'label' => 'ورود',
                    ],
                ],
            ],
        ],
    ],
    'layout' => [
        'sidebar' => [
            'groups' => [
                'app' => [
                    'label' => 'برنامه',
                ],
            ],
        ],
    ],
    'resources' => [
        'label' => 'منابع',
        'items' => [
            'label' => 'آیتم‌ها',
            'singular' => 'آیتم',
        ],
        'categories' => [
            'label' => 'دسته‌بندی‌ها',
            'singular' => 'دسته‌بندی',
        ],
    ],
];
