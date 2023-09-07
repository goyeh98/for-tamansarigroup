@extends('admin.layouts.app')

@section('title')
    Setting
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Setting</h3>
        </div>
    </div>
    <div class="card-body">
        @if ($setting)
            @include('admin.setting.edit')
        @else
            @include('admin.setting.create')
        @endif
    </div>
</div>
@endsection
