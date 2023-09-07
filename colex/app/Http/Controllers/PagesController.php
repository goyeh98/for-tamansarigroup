<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        // $news = News::orderByDesc('id')->limit(4)->get();

        $data = [
            // 'news' => $news
        ];
        return view('pages.home', $data);
    }

    public function about_us()
    {
        return view('pages.about');
    }

    public function kolaborasi()
    {
        return view('pages.kolaborasi');
    }

    public function promo()
    {
        return view('pages.promo');
    }
}
