@extends('admin.layouts.app')

@section('title')
Tambah Berita
@endsection

@section('pagevendorjs')
<script src="{{ asset('assets/admin/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
@endsection
@section('pagecustomjs')
<script>
    let csrf_token = "{{ csrf_token() }}";
    let upload_url = "{{ url('admin/news/upload-image') }}";
</script>
<script src="{{ asset('assets/admin/js/custom/ckeditor.js') }}"></script>
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Tambah Berita</h3>
        </div>
    </div>
    <form action="{{ url('admin/news') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="title" class="form-label">Judul <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}" required>
                @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                <textarea name="content" id="content"
                    class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail"
                    class="form-control @error('thumbnail') is-invalid @enderror" accept="image/*">
                @error('thumbnail')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary">Tambah Berita</button>
            <a href="{{ url('admin/news') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
