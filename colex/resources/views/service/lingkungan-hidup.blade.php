@extends('layouts.app')

@section('title')
Lingkungan Hidup
@endsection

@section('content')
<!-- Content
============================================= -->
<section id="content">
  <div class="content-wrap p-0">
    <!-- Section service -->
    <div class="container-fluid bg-light text-center py-5" id="service">
      <div class="container">
        <div data-animate="fadeInDown faster">
          <h2>Lingkungan Hidup</h2>

          <div class="nav price-tabs" role="tablist">
            <a class="nav-link active" href="#tab1" role="tab" data-bs-toggle="tab" data-bs-target="#tab1">Amdal,
              UKL-UPL, SPPL</a>
            <a class="nav-link" href="#tab2" role="tab" data-bs-toggle="tab" data-bs-target="#tab2">Limbah B3</a>
          </div>
        </div>


        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade show active" id="tab1">
            <h3>Amdal, UKL-UPL, SPPL</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Harga Promo menanti anda !<span class="sup"></span></h3>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li> Merupakan izin lingkungan yang digunakan
                          dalam kegiatan usaha dan merupakan izin
                          dasar dalam pengurusan izin usaha/izin
                          teknikal lainnya.
                        </li>
                        <li>Kami akan memberikan
                          solusi izin lingkungan mana yang tepat bagi
                          kondisi usaha anda.</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Amdal, UKL-UPL, SPPL') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab2">
            <h3>Izin Limbah B3</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Harga Promo <span class="sup"></span></h3>
                      <h4 class="mb-0"> 10 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>Merupakan izin untuk menyimpan sementara
                          limbah B3 bagi penghasil, sebelum nantinya
                          akan diangkut oleh transporter limbah ke
                          pengelolaan limbah B3.</li>
                        <li>*Syarat dan ketentuan berlaku*</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Izin Limbah B3') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End:Section service -->
  </div>
</section><!-- #content end -->
@endsection
