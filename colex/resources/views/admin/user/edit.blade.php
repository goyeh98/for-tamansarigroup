@extends('admin.layouts.app')

@section('title')
    Ubah User
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Ubah User</h3>
        </div>
    </div>
    <form action="{{ url("admin/users/$user->id") }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" required>
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username }}" required>
                @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                <div class="form-text">biarkan kosong untuk tidak berubah</div>
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="role_id" class="form-label">Role</label>
                <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror" required>
                    <option value="">-- Pilih Role --</option>
                    <?php foreach ($roles as $role) { ?>
                        <option value="<?= $role->id; ?>" {{ ($user->roles[0]->id ?? '') == $role->id ? 'selected' : '' }}><?= $role->display_name; ?></option>
                    <?php } ?>
                </select>
                @error('role_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-success">Ubah User</button>
            <a href="{{ url('admin/users') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
