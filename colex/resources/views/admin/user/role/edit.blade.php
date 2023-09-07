@extends('admin.layouts.app')

@section('title')
    Ubah Role
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Ubah Role</h3>
        </div>
    </div>
    <form action="{{ url("admin/users/roles/$role->id") }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="display_name" class="form-label">Nama <span class="text-danger">*</span></label>
                <input type="text" name="display_name" id="display_name" class="form-control @error('display_name') is-invalid @enderror" value="{{ $role->display_name }}" required>
                @error('display_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <table class="table table-rounded table-striped table-row-bordered border gs-3 mb-0 @error('permission_ids') is-invalid border-danger @enderror" width="100%">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">No</th>
                        <th width="45%">Akses</th>
                        <th width="50%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rolePermissions = array_column($role->permissions->toArray(), 'id');
                    @endphp
                    @foreach ($permissions as $permission)
                        <tr>
                            <td class="align-middle text-center">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $permission->display_name }}</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" name="permission_ids[]" value="{{ $permission->id }}" id="permission_id" class="form-check-input" {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>
                                    <label for="permission_id" class="form-check-label"></label>
                                  </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @error('permission_ids')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-success">Ubah Role</button>
            <a href="{{ url('admin/users/roles') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
