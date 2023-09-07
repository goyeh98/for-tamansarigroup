@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<!-- Content
============================================= -->
<section id="content" class="home">
    <div class="content-wrap py-0">

        <div class="container-fluid" id="jumbotron">
            <div class="container">
                <h1 class="text-uppercase mb-0" data-animate="fadeInDown faster">PT. DSA <br>
                    Legas Network</h1>

                <p class="mb-3" data-animate="fadeInDown faster">Lindungi Legalitas Usaha Anda Bersama Kami</p>

                <a href="#slidebar" class="btn btn-primary" data-scrollto="#slidebar"
                    data-animate="fadeInDown faster">Selengkapnya</a>
            </div>
        </div>

        <div class="container-fluid" id="icon-strength">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-flex mb-3" data-animate="fadeInDown faster">
                        <div class="rounded icon">
                            <i class="icon-user-tie"></i>
                        </div>
                        <div class="strength">Profesional</div>
                    </div>
                    <div class="col-md-3 d-flex mb-3" data-animate="fadeInDown faster">
                        <div class="rounded icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8 12.5l3 3l5-6" />
                                    <circle cx="12" cy="12" r="10" />
                                </g>
                            </svg>
                        </div>
                        <div class="strength">Nyaman</div>
                    </div>
                    <div class="col-md-3 d-flex mb-3" data-animate="fadeInDown faster">
                        <div class="rounded icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M15 4a8 8 0 0 1 8 8a8 8 0 0 1-8 8a8 8 0 0 1-8-8a8 8 0 0 1 8-8m0 2a6 6 0 0 0-6 6a6 6 0 0 0 6 6a6 6 0 0 0 6-6a6 6 0 0 0-6-6m-1 2h1.5v3.78l2.33 2.33l-1.06 1.06L14 12.4V8M2 18a1 1 0 0 1-1-1a1 1 0 0 1 1-1h3.83c.31.71.71 1.38 1.17 2H2m1-5a1 1 0 0 1-1-1a1 1 0 0 1 1-1h2.05L5 12l.05 1H3m1-5a1 1 0 0 1-1-1a1 1 0 0 1 1-1h3c-.46.62-.86 1.29-1.17 2H4Z" />
                            </svg>
                        </div>
                        <div class="strength">Cepat</div>
                    </div>
                    <div class="col-md-3 d-flex mb-3" data-animate="fadeInDown faster">
                        <div class="rounded icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="m114.8 160.2l-1.1 1.6A72.2 72.2 0 0 1 55.1 192H32a8 8 0 0 1 0-16h23.1a56.1 56.1 0 0 0 45.5-23.5l1.2-1.6a8 8 0 1 1 13 9.3ZM143 107a8 8 0 0 0 11.2-1.9l1.2-1.6A55.9 55.9 0 0 1 200 80v16a8 8 0 0 0 4.9 7.4a8.5 8.5 0 0 0 3.1.6a8.3 8.3 0 0 0 5.7-2.3l24-24a8.1 8.1 0 0 0 0-11.4l-24-24a8.4 8.4 0 0 0-8.8-1.7A8 8 0 0 0 200 48v16a72.2 72.2 0 0 0-57.7 30.2l-1.1 1.6A8 8 0 0 0 143 107Zm70.7 47.3a8.4 8.4 0 0 0-8.8-1.7a8 8 0 0 0-4.9 7.4v16a55.9 55.9 0 0 1-44.6-23.5l-41.7-58.3A72.2 72.2 0 0 0 55.1 64H32a8 8 0 0 0 0 16h23.1a56.1 56.1 0 0 1 45.5 23.5l41.7 58.3A72.2 72.2 0 0 0 200 192v16a8 8 0 0 0 4.9 7.4a8.5 8.5 0 0 0 3.1.6a8.3 8.3 0 0 0 5.7-2.3l24-24a8.1 8.1 0 0 0 0-11.4Z" />
                            </svg>
                        </div>
                        <div class="strength">Fleksibel</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section slidebar -->
        <svg viewBox="0 0 1919 199" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 159.2L106.667 139.3C213.333 119.4 426.667 79.6 640 59.7C853.333 39.8 1066.67 39.8 1280 56.4041C1493.33 72.7594 1706.67 106.341 1813.33 122.696L1920 139.3V199H1813.33C1706.67 199 1493.33 199 1280 199C1066.67 199 853.333 199 640 199C426.667 199 213.333 199 106.667 199H0V159.2Z"
                fill="#E3F2FC" />
        </svg>
        <div class="container-fluid py-5" id="slidebar">
            <div class="container" data-animate="fadeInDown faster">
                <div id="oc-slidebar" class="owl-carousel carousel-widget text-white" data-items="1" data-loop="true"
                    data-nav="true" data-pagi="true" data-autoplay="50000" data-animate-in="fadeInRight"
                    data-animate-out="fadeOutLeft" data-speed="800">
                    <div class="oc-item">
                        <div class="row align-items-center">
                            <div class="col-4 offset-md-2 text-end pe-4">
                                <img src="{{ asset('assets/img/irfan1.png') }}" alt="">
                            </div>
                            <div class="col">
                                <p>Bisnis gue makin hari makin laris, <br>
                                    tapi legalitasnya kok gini-gini aja</p>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="row align-items-center">
                            <div class="col-4 offset-md-2 text-end pe-4">
                                <img src="{{ asset('assets/img/irfan3.png') }}" alt="">
                            </div>
                            <div class="col">
                                <p>Udah gue coba urus sendiri <br>
                                    legalitasnya tapi rumit, berbelit-belit <br>
                                    dan belum tentu jadi. <br>
                                    Gimana ya solusinya ?</p>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="row align-items-center">
                            <div class="col-4 offset-md-2 text-end pe-4">
                                <img src="{{ asset('assets/img/irfan2.png') }}" alt="">
                            </div>
                            <div class="col">
                                <p>Haaaaahhh ….. <br>
                                    Seriiuuusss …. <br>
                                    COLEX bisa handle legalitas bisnis gue ? <br>
                                    Ini yang gue cari-cari … <br>
                                    langsung gue chat ah … <i class="fas fa-phone"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="row align-items-center">
                            <div class="col-4 offset-md-2 text-end pe-4">
                                <img src="{{ asset('assets/img/irfan4.png') }}" alt="">
                            </div>
                            <div class="col">
                                <p>Legalitas aman <br>
                                    Omset bisnis naik <br>
                                    Tidur nyenyak <br>
                                    Bisa enjoy traveling <br>
                                    Semua ini karena support tim COLEX !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:Section slidebar -->

        <!-- Section why -->
        <div class="container-fluid text-white py-5" id="why">
            <div class="container">
                <div class="heading-block text-center" data-animate="fadeInDown faster">
                    <h2 class="text-capitalize mb-0">Kenapa anda akan puas dengan jasa COLEX ?</h2>
                </div>

                <div class="row gx-5">
                    <div class="offset-md-1 col-md-5 mb-3" data-animate="fadeInDown faster">
                        <img src="{{ asset('assets/img/undraw_speed_test_wxl0.svg') }}" alt="" class="mb-3"
                            style="height: 350px">
                        <h3 class="text-white mb-0">Profesional</h3>
                        <p>Bahkan yang muda pun bisa handal, prima dan berketerampilan
                            tinggi dalam setiap menangani persoalan bisnis serta berpegang
                            teguh menempatkan kualitas kerja yang baik</p>
                    </div>
                    <div class="offset-md-1 col-md-5 mb-3" data-animate="fadeInDown faster">
                        <img src="{{ asset('assets/img/undraw_voice_interface_re_206s.svg') }}" class="mb-3" alt=""
                            style="height: 350px">
                        <h3 class="text-white mb-0">Nyaman</h3>
                        <p>Kami akan memberikan pelayanan yang menarik, sehingga
                            client akan merasa puas dan tidak ragu untuk datang kembali</p>
                    </div>
                    <div class="offset-md-1 col-md-5 mb-3" data-animate="fadeInDown faster">
                        <img src="{{ asset('assets/img/undraw_fitness_stats_sht6.svg') }}" alt="" class="mb-3"
                            style="height: 350px">
                        <h3 class="text-white mb-0">Cepat</h3>
                        <p>Kecepatan adalah prioritas prinsip kerja kami, pelayanan
                            express sehingga dapat menghemat waktu</p>
                    </div>
                    <div class="offset-md-1 col-md-5 mb-3" data-animate="fadeInDown faster">
                        <img src="{{ asset('assets/img/undraw_instant_analysis_re_mid5.svg') }}" class="mb-3" alt=""
                            style="height: 350px">
                        <h3 class="text-white mb-0">Fleksibel</h3>
                        <p>Dimanapun dan kapanpun kami siap membantu anda mengatasi
                            legalitas usaha anda</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:Section why -->

        <!-- Section testimoni -->
        <div class="container-fluid pt-5" id="testimoni">
            <div class="container">
                <div class="heading-block text-center" data-animate="fadeInDown faster">
                    <h2 class="text-capitalize mb-0">Kata Mereka Yang Menggunakan Jasa COLEX !</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3" data-animate="fadeInDown faster">
                        <div class="testimonial testimonial-full">
                            <div class="testi-image">
                                <a href="#"><img src="{{ asset('assets/img/testimonial/20220420_123122.jpg') }}"
                                        alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Setelah menggunakan jasa Colex pengurusan perijinan perusahaan menjadi lebih cepat
                                    dan praktis</p>
                                <div class="testi-meta">
                                    Encep Saebatul Slamet
                                    <span>PT. Batara Indah & PT. Bino Mitra Sejati</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3" data-animate="fadeInDown faster">
                        <div class="testimonial testimonial-full">
                            <div class="testi-image">
                                <a href="#"><img src="{{ asset('assets/img/testimonial/perma.jpeg') }}"
                                        alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Terima kasih atas kerjasama dan bantuan pengurusan perijinan UKL UPL dan perijinan
                                    lainnya 🙏🙏🙏.
                                    Dengan adanya kerjasama ini, pengurusan perijinan dan lainnya ada PIC yg fokus
                                    khusus mengenai hal ini.
                                    Terima kasih🙏🙏🙏</p>
                                <div class="testi-meta">
                                    Arman Darma Laksana
                                    <span>PT. Perma Plasindo, Tbk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3" data-animate="fadeInDown faster">
                        <div class="testimonial testimonial-full">
                            <div class="testi-image">
                                <a href="#"><img src="{{ asset('assets/img/testimonial/20220420_123225.jpg') }}"
                                        alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Mulai kerjasama dari tahun 2019, Pak Deni dan kantor konsultannya selalu memberikan
                                    pelayanan yang baik kepada PT.Perma Plasindo,Tbk dan anak usahanya</p>
                                <div class="testi-meta">
                                    Andre TB Sianipar
                                    <span>PT. Perma Plasindo, Tbk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E3F2FC" fill-opacity="1"
                d="M0,64L80,96C160,128,320,192,480,224C640,256,800,256,960,229.3C1120,203,1280,149,1360,122.7L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>
        <!-- End:Section testimoni -->

        <!-- Section client -->
        <div class="heading-block text-center mb-4" data-animate="fadeInDown faster">
            <h2 class="text-capitalize mb-0">Bisnis yang sudah COLEX bantu</h2>
        </div>
        <div class="container-fluid py-5" id="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center mb-4" data-animate="fadeInDown faster">
                        <img src="{{ asset('assets/img/bantex.png') }}" alt="" style="max-width: 200px">
                    </div>
                    <div class="col-md-3 text-center mb-4" data-animate="fadeInDown faster">
                        <img src="{{ asset('assets/img/bms.png') }}" alt="" style="max-width: 200px">
                    </div>
                    <div class="col-md-3 text-center mb-4" data-animate="fadeInDown faster">
                        <img src="{{ asset('assets/img/apli.png') }}" alt="" style="max-width: 200px">
                    </div>
                    <div class="col-md-3 text-center mb-4" data-animate="fadeInDown faster">
                        <img src="{{ asset('assets/img/perma.png') }}" alt="" style="max-width: 200px">
                    </div>
                </div>
            </div>
        </div>
        <!-- End:Section client -->
    </div>
</section><!-- #content end -->
@endsection
