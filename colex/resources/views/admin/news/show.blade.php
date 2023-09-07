@extends('admin.layouts.app')

@section('title')
Detail Berita
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Detail Berita</h3>
        </div>
        <div class="card-toolbar">
            @can('edit-news')
            <a href="{{ url("admin/news/$news->id/edit") }}" class="btn btn-success btn-sm me-3">
                <span class="svg-icon svg-icon-md">
                    <i class="fas fa-edit"></i>
                </span> Ubah
            </a>
            @endcan
            @can('destroy-news')
            <form action="{{ url("admin/news/$news->id") }}" method="post" class="d-inline-block">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                    onclick="return confirm('Anda Yakin?');">
                    <span class="svg-icon svg-icon-md">
                        <i class="fas fa-trash"></i>
                    </span> Hapus
                </button>
            </form>
            @endcan
        </div>
    </div>
    <div class="card-body">
        <h1 class="mb-3">{{ $news->title }}</h1>
        <img src="{{ asset('storage/' . $news->thumbnail) }}" class="img-fluid d-block mb-3" style="max-height: 300px">
        {!! $news->content !!}
    </div>
</div>
@endsection
