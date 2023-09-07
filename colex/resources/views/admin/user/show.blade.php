@extends('admin.layouts.app')

@section('title')
    Detail User
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Detail User</h3>
        </div>
        <div class="card-toolbar">
            @can('edit-users')
                <a href="{{ url("admin/users/$user->id/edit") }}" class="btn btn-success btn-sm me-3">
                    <span class="svg-icon svg-icon-md">
                        <i class="fas fa-edit"></i>
                    </span> Ubah
                </a>
            @endcan
            @can('destroy-users')
                <form action="{{ url("admin/users/$user->id") }}" method="post" class="d-inline-block">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Anda Yakin?');">
                        <span class="svg-icon svg-icon-md">
                            <i class="fas fa-trash"></i>
                        </span> Hapus
                    </button>
                </form>
            @endcan
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover gs-3" width="100%">
            <tr>
                <th width="25%" class="fw-boldest">Nama</th>
                <td width="75%">{{ $user->name }}</td>
            </tr>
            <tr>
                <th class="fw-boldest">Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th class="fw-boldest">Username</th>
                <td>{{ $user->username }}</td>
            </tr>
            <tr>
                <th class="fw-boldest">Roles</th>
                <td>{{ $user->roles[0]->display_name ?? '' }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
