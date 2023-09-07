@extends('admin.layouts.app')

@section('title')
    Detail Role
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Detail Role</h3>
        </div>
        <div class="card-toolbar">
            @can('edit-roles')
                <a href="{{ url("admin/users/roles/$role->id/edit") }}" class="btn btn-success btn-sm me-3">
                    <span class="svg-icon svg-icon-md">
                        <i class="fas fa-edit"></i>
                    </span> Ubah
                </a>
            @endcan
            @can('destroy-roles')
                <form action="{{ url("admin/users/roles/$role->id") }}" method="post" class="d-inline-block">
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
                <td width="75%">{{ $role->display_name }}</td>
            </tr>
        </table>
        <table class="table table-rounded table-striped table-row-bordered border gs-3 mb-0" width="100%">
            <thead>
                <tr>
                    <th width="5%" class="text-center">No</th>
                    <th width="95%">Akses</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($role->permissions as $permission)
                    <tr>
                        <td class="align-middle text-center">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $permission->display_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
