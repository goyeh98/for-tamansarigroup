@extends('admin.layouts.app')

@section('title')
Berita
@endsection

@section('pagevendorcss')
<link href="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet">
@endsection

@section('pagevendorjs')
<script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
@endsection
@section('pagecustomjs')
<script src="{{ asset('assets/admin/js/custom/datatables.js') }}"></script>
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Data Berita</h3>
        </div>
        <div class="card-toolbar">
            @can('create-news')
            <a href="{{ url('admin/news/create') }}" class="btn btn-primary btn-sm">
                <span class="svg-icon svg-icon-md">
                    <i class="fas fa-plus"></i>
                </span> Tambah
            </a>
            @endcan
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover gs-3" id="dataTable" width="100%">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="10%">Thumbnail</th>
                    <th width="70%">Judul</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $data)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle"><img src="{{ asset('storage/' . $data->thumbnail) }}" class="img-fluid"
                            style="max-height: 50px;"></td>
                    <td class="align-middle">{{ $data->title }}</td>
                    <td class="align-middle">
                        @can('show-news')
                        <a href="{{ url("admin/news/$data->id") }}" class="btn btn-info btn-icon btn-sm"
                            title="Detail">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        @endcan
                        @can('edit-news')
                        <a href="{{ url("admin/news/$data->id/edit") }}" class="btn btn-success btn-icon btn-sm"
                            title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        @endcan
                        @can('destroy-news')
                        <form action="{{ url("admin/news/$data->id") }}" method="post" class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-icon btn-sm" title="Delete"
                                onclick="return confirm('Anda Yakin?');"><i class="fas fa-trash"></i></button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
