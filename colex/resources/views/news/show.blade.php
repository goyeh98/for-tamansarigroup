@extends('layouts.app')

@section('title')
{{ $news->title }}
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
        <!-- Section Detail Berita -->
        <div class="container-fluid py-5" id="detailberita">
            <div class="container">
                <div data-animate="fadeInDown faster">
                    <div class="single-post mb-0">
                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">
                            <!-- Entry Title
                            ============================================= -->
                            <div class="entry-title">
                                <h2>{{ $news->title }}</h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
                            ============================================= -->
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> {{ date('d M Y', strtotime($news->created_at)) }}
                                    </li>
                                    <li><i class="icon-user"></i> Admin</li>
                                </ul>
                            </div><!-- .entry-meta end -->

                            <!-- Entry Image
                            ============================================= -->
                            <div class="entry-image bottommargin">
                                @if ($news->thumbnail && file_exists('storage/' . $news->thumbnail))
                                <img class="image_fade" src="{{ asset('storage/' . $news->thumbnail) }}"
                                    alt="{{ $news->title }}">
                                @else
                                <picture>
                                    <source type="image/webp" srcset="{{ asset('assets/img/default_blog.webp') }}">
                                    <source type="image/jpeg" srcset="{{ asset('assets/img/default_blog.jpg') }}">
                                    <img src="{{ asset('assets/img/default_blog.jpg') }}" class="image_fade"
                                        alt="{{ $news->title }}">
                                </picture>
                                @endif
                            </div>
                            <!-- .entry-image end -->

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content mt-0">
                                {!! $news->content !!}

                                <div class="clear"></div>
                            </div>
                        </div><!-- .entry end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End:Section Detail Berita -->
    </div>
</section>
<!-- #content end -->
@endsection
