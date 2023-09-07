<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('index-roles')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $roles = Role::get();

        $data = [
            'roles' => $roles
        ];
        return view('admin.user.role.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('create-roles')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $permissions = Permission::get();

        $data = [
            'permissions' => $permissions
        ];
        return view('admin.user.role.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'display_name' => ['required', 'unique:roles'],
            'permission_ids' => ['required']
        ];
        $customAttributes = [
            'display_name' => 'Nama',
            'permission_ids' => 'Akses'
        ];
        Validator::make($request->all(), $rules, attributes: $customAttributes)->validate();

        DB::beginTransaction();
        try {
            $role = new Role;
            $role->name = Str::slug($request->get('display_name'));
            $role->display_name = $request->get('display_name');
            $role->save();

            foreach ($request->get('permission_ids') as $permission_id) {
                $permissionRole = new PermissionRole;
                $permissionRole->permission_id = $permission_id;
                $permissionRole->role_id = $role->id;
                $permissionRole->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            return back()->with('alert', '<div class="alert alert-danger"><div class="d-flex flex-column"><span>' . $e->getMessage() . '</div></div>')->withInput();
        }

        return redirect('admin/users/roles')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil tambah role.</div></div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        if (!Gate::allows('show-roles')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $permissions = Permission::get();

        $data = [
            'role' => $role,
            'permissions' => $permissions
        ];
        return view('admin.user.role.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        if (!Gate::allows('edit-roles')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $permissions = Permission::get();

        $data = [
            'role' => $role,
            'permissions' => $permissions
        ];
        return view('admin.user.role.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $rules = [
            'display_name' => ['required', Rule::unique('roles')->ignore($role->id)],
            'permission_ids' => ['required']
        ];
        $customAttributes = [
            'display_name' => 'Nama',
            'permission_ids' => 'Akses'
        ];
        Validator::make($request->all(), $rules, attributes: $customAttributes)->validate();

        DB::beginTransaction();
        try {
            $role->name = Str::slug($request->get('display_name'));
            $role->display_name = $request->get('display_name');
            $role->save();

            PermissionRole::where('role_id', $role->id)->delete();
            foreach ($request->get('permission_ids') as $permission_id) {
                $permissionRole = new PermissionRole;
                $permissionRole->permission_id = $permission_id;
                $permissionRole->role_id = $role->id;
                $permissionRole->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            return back()->with('alert', '<div class="alert alert-danger"><div class="d-flex flex-column"><span>' . $e->getMessage() . '</div></div>')->withInput();
        }

        return redirect('admin/users/roles')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil ubah role.</div></div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if (!Gate::allows('destroy-roles')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        DB::beginTransaction();
        try {
            PermissionRole::where('role_id', $role->id)->delete();

            $role->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            return back()->with('alert', '<div class="alert alert-danger"><div class="d-flex flex-column"><span>' . $e->getMessage() . '</div></div>')->withInput();
        }

        return redirect('admin/users/roles')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil hapus role.</div></div>');
    }
}
