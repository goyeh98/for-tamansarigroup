@extends('layouts.app')

@section('title')
Berita
@endsection

@section('content')
<!-- Page Title
============================================= -->
{{-- <section id="page-title">
    <div class="container clearfix">
        <h1>Berita</h1>
        <span>&nbsp;</span>
    </div>
</section> --}}
<!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap py-0">
        <!-- Section Berita -->
        <div class="container-fluid py-5" id="berita">
            <div class="container">
                <div id="posts" class="post-grid row grid-container gutter-30" data-layout="fitRows">
                    @forelse ($news as $data)
                    <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <a href="{{ route('news.show', ['slug' => $data->slug]) }}">
                                    @if ($data->thumbnail && file_exists('storage/' . $data->thumbnail))
                                    <img class="image_fade" src="{{ asset('storage/' . $data->thumbnail) }}"
                                        alt="{{ $data->title }}">
                                    @else
                                    <picture>
                                        <source type="image/webp" srcset="{{ asset('assets/img/default_blog.webp') }}">
                                        <source type="image/jpeg" srcset="{{ asset('assets/img/default_blog.jpg') }}">
                                        <img src="{{ asset('assets/img/default_blog.jpg') }}" class="image_fade"
                                            alt="{{ $data->title }}">
                                    </picture>
                                    @endif
                                </a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="{{ route('news.show', ['slug' => $data->slug]) }}">{{ $data->title }}</a>
                                </h2>
                            </div>
                            <div class="entry-content">
                                <p>{{ substr(strip_tags($data->content), 0, 160) }}...</p>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-user"></i> Admin</li>
                                    <li><i class="icon-calendar3"></i> {{ date('d M Y', strtotime($data->created_at)) }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-md-12 mb-4">
                        <div class="style-msg infomsg">
                            <div class="sb-msg"><i class="icon-info-sign"></i>Berita tidak ditemukan.</div>
                        </div>
                    </div>
                    @endforelse
                </div><!-- #posts end -->

                <!-- Pagination
                ============================================= -->
                {{ $news->links('layouts.pagination', ['paginator' => $news]) }}
            </div>
        </div>
        <!-- End:Section Berita -->
    </div>
</section>
<!-- #content end -->
@endsection
