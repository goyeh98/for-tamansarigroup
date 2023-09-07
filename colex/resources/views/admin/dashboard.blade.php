@extends('admin.layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Menu Navigation</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            @can('index-news')
            <div class="col-md-3 mb-3 d-flex align-items-stretch">
                <a href="{{ url('admin/news') }}"
                    class="d-flex flex-grow-1 align-items-center bg-light bg-hover-light p-4 rounded">
                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                        <i class="fas fa-newspaper icon-xl"></i>
                    </div>
                    <div class="text-muted">Berita</div>
                </a>
            </div>
            @endcan
            @can('index-users')
            <div class="col-md-3 mb-3 d-flex align-items-stretch">
                <a href="{{ url('admin/users') }}"
                    class="d-flex flex-grow-1 align-items-center bg-light bg-hover-light p-4 rounded">
                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                        <i class="fas fa-user icon-xl"></i>
                    </div>
                    <div class="text-muted">User Management</div>
                </a>
            </div>
            @endcan
            @can('index-settings')
            <div class="col-md-3 mb-3 d-flex align-items-stretch">
                <a href="{{ url('admin/settings') }}"
                    class="d-flex flex-grow-1 align-items-center bg-light bg-hover-light p-4 rounded">
                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                        <i class="fas fa-cog icon-xl"></i>
                    </div>
                    <div class="text-muted">Setting</div>
                </a>
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection
