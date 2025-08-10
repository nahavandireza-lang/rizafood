<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with menu categories and items.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = \App\Models\Category::where('enabled', true)
            ->orderBy('sort')
            ->with(['items' => function ($query) {
                $query->where('enabled', true)
                    ->orderBy('sort');
            }])
            ->get();

        return view('home', [
            'categories' => $categories
        ]);
    }
}
