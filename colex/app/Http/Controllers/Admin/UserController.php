<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('index-users')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $users = User::with('roles')->where('username', '!=', 'khidirdotid')->orderBy('id', 'asc')->get();

        $data = [
            'users' => $users
        ];
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('create-users')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $roles = Role::get();

        $data = [
            'roles' => $roles
        ];
        return view('admin.user.create', $data);
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
            'name' => ['required'],
            'username' => ['required', 'unique:users'],
            'email' => ['unique:users'],
            'password' => ['required'],
            'role_id' => ['required']
        ];
        $customAttributes = [
            'name' => 'Nama',
            'role_id' => 'Role'
        ];
        Validator::make($request->all(), $rules, attributes: $customAttributes)->validate();

        DB::beginTransaction();
        try {
            $user = new User;
            $user->name = $request->get('name');
            $user->username = $request->get('username');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->get('password'));
            $user->save();

            $roleUser = new RoleUser;
            $roleUser->role_id = $request->get('role_id');
            $roleUser->user_id = $user->id;
            $roleUser->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            return back()->with('alert', '<div class="alert alert-danger"><div class="d-flex flex-column"><span>' . $e->getMessage() . '</div></div>')->withInput();
        }

        return redirect('admin/users')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil tambah user.</div></div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (!Gate::allows('show-users')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $data = [
            'user' => $user
        ];
        return view('admin.user.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (!Gate::allows('edit-users')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $roles = Role::get();

        $data = [
            'user' => $user,
            'roles' => $roles
        ];
        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => ['required'],
            'username' => ['required', Rule::unique('users')->ignore($user->id)],
            'email' => [Rule::unique('users')->ignore($user->id)],
            'role_id' => ['required']
        ];
        $customAttributes = [
            'name' => 'Nama',
            'role_id' => 'Role'
        ];
        Validator::make($request->all(), $rules, attributes: $customAttributes)->validate();

        DB::beginTransaction();
        try {
            $user->name = $request->get('name');
            $user->username = $request->get('username');
            $user->email = $request->get('email');

            if ($request->get('password')) {
                $user->password = Hash::make($request->get('password'));
            }

            $user->save();

            RoleUser::where('user_id', $user->id)->delete();
            $roleUser = new RoleUser;
            $roleUser->role_id = $request->get('role_id');
            $roleUser->user_id = $user->id;
            $roleUser->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            return back()->with('alert', '<div class="alert alert-danger"><div class="d-flex flex-column"><span>' . $e->getMessage() . '</div></div>')->withInput();
        }

        return redirect('admin/users')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil ubah user.</div></div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (!Gate::allows('destroy-users')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        DB::beginTransaction();
        try {
            RoleUser::where('user_id', $user->id)->delete();

            $user->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            return back()->with('alert', '<div class="alert alert-danger"><div class="d-flex flex-column"><span>' . $e->getMessage() . '</div></div>')->withInput();
        }

        return redirect('admin/users')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil hapus user.</div></div>');
    }
}
