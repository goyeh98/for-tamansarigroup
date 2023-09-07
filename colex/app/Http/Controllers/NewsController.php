<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderByDesc('id')->paginate(8);

        $data = [
            'news' => $news
        ];
        return view('news.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();

        if (!$news) {
            return redirect('news');
        }

        $data = [
            'news' => $news
        ];
        return view('news.show', $data);
    }
}
