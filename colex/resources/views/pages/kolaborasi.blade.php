@extends('layouts.app')

@section('title')
Kolabolasi
@endsection

@section('content')
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap p-0">
        <!-- Section kolaborasi -->
        <div class="container-fluid text-center py-5" id="kolaborasi"
            style="background: linear-gradient(180deg, #5D9DD8 0%, rgba(99, 166, 227, 0) 100%);">
            <div class="container">
                <div class="shadow bg-white pt-4 px-4" style="border-radius: 1.5rem">
                    <h1>Kolabolasi</h1>

                    <div class="row">
                        <div class="col-md-8 mb-4">
                            <p style="font-size: 28px;">Kami membuka peluang kerjasama agar kita semakin berkembang dan
                                maju serta mendapatkan
                                nilai income yang lebih tinggi..</p>

                            <a href="" class="btn btn-primary rounded-pill" style="font-size: 20px;
                            width: 200px;">Let's Talk</a>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/DSC04446.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:Section kolaborasi -->
    </div>
</section><!-- #content end -->
@endsection
