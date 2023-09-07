<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('index-news')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $news = News::get();

        $data = [
            'news' => $news
        ];
        return view('admin.news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('create-news')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => ['required'],
            'content' => ['required'],
            'thumbnail' => ['image', 'max:2048']
        ];
        $customAttributes = [
            'title' => 'Judul',
            'content' => 'Content',
            'thumbnail' => 'File'
        ];
        Validator::make($request->all(), $rules, attributes: $customAttributes)->validate();

        $news = new News;
        $news->title = $request->get('title');
        $news->content = $request->get('content');

        if ($request->hasFile('thumbnail')) {
            $news->thumbnail = $request->file('thumbnail')->store(date('Y/m'), 'public');
        }

        $news->save();

        return redirect('admin/news')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil tambah post.</div></div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        if (!Gate::allows('show-news')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $data = [
            'news' => $news
        ];
        return view('admin.news.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        if (!Gate::allows('edit-news')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $data = [
            'news' => $news
        ];
        return view('admin.news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $rules = [
            'title' => ['required'],
            'content' => ['required'],
            'thumbnail' => ['image', 'max:2048']
        ];
        $customAttributes = [
            'title' => 'Judul',
            'content' => 'Content',
            'thumbnail' => 'File'
        ];
        Validator::make($request->all(), $rules, attributes: $customAttributes)->validate();

        if ($news->title != $request->get('title')) {
            $news->slug = SlugService::createSlug(News::class, 'slug', $request->get('title'));
        }
        $news->title = $request->get('title');
        $news->content = $request->get('content');

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store(date('Y/m'), 'public');
            if ($news->thumbnail && file_exists(storage_path('app/public/' . $news->thumbnail))) {
                Storage::delete('public/' . $news->thumbnail);
            }
            $news->thumbnail = $thumbnail;
        }

        $news->save();

        return redirect('admin/news')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil ubah berita.</div></div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if (!Gate::allows('destroy-news')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $news->delete();

        if ($news->thumbnail && file_exists(storage_path('app/public/' . $news->thumbnail))) {
            Storage::delete('public/' . $news->thumbnail);
        }

        return redirect('admin/news')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil hapus berita.</div></div>');
    }

    public function uploadImage(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store(date('Y/m'), 'public');
        $url = asset("storage/$thumbnail");

        return response()->json(['url' => $url]);
    }
}
