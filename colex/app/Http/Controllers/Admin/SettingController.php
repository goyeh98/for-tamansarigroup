<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('index-settings')) {
            abort(403, 'Anda tidak memiliki cukup hak akses');
        }

        $setting = Setting::first();

        $data = [
            'setting' => $setting
        ];
        return view('admin.setting.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['google_analytics' => ['required']];
        $customAttributes = ['google_analytics' => 'Google Analytics'];
        Validator::make($request->all(), $rules, attributes: $customAttributes)->validate();

        $setting = new Setting;
        $setting->google_analytics = $request->get('google_analytics');
        $setting->save();

        return redirect('admin/settings')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil ubah setting.</div></div>');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $setting->google_analytics = $request->get('google_analytics');
        $setting->save();

        return redirect('admin/settings')->with('alert', '<div class="alert alert-success"><div class="d-flex flex-column"><span>Anda berhasil ubah setting.</div></div>');
    }
}
