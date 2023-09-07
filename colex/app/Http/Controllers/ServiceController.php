<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function pendirian_badan_usaha()
    {
        return view('service.pendirian-badan-usaha');
    }

    public function perizinan_berusaha()
    {
        return view('service.perizinan-berusaha');
    }

    public function ketenagakerjaan()
    {
        return view('service.ketenagakerjaan');
    }

    public function lingkungan_hidup()
    {
        return view('service.lingkungan-hidup');
    }

    public function izin_esdm()
    {
        return view('service.izin-esdm');
    }

    public function tanah_dan_bangunan()
    {
        return view('service.tanah-dan-bangunan');
    }

    public function sertifikasi()
    {
        return view('service.sertifikasi');
    }

    public function perpajakan()
    {
        return view('service.perpajakan');
    }

    public function hak_kekayaan_intelektual()
    {
        return view('service.hak-kekayaan-intelektual');
    }
}
