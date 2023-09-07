@extends('layouts.app')

@section('title')
Perizinan Berusaha
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
          <h2>Perizinan Berusaha/OSS</h2>

          <div class="nav price-tabs" role="tablist">
            <a class="nav-link active" href="#tab1" role="tab" data-bs-toggle="tab" data-bs-target="#tab1">Akun OSS
              RBA</a>
            <a class="nav-link" href="#tab2" role="tab" data-bs-toggle="tab" data-bs-target="#tab2">PB UMKU</a>
          </div>
        </div>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade show active" id="tab1">
            <h3>Pengurusan Akun OSS RBA</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Harga Promo<span class="sup"></span></h3>
                      <h4 class="mb-0"> 4.5 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight12" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight12"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pembuatan Akun OSS</li>
                                <li class="text-dark">Pembuatan NIB</li>
                                <li class="text-dark">PKKPR</li>
                                <li class="text-dark">Sertifikat Standar (jika diperlukan)</li>
                              </ul>
                              <div class="btn-area">
                                <a
                                  href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pengurusan Akun OSS RBA') }}">Booking
                                  Now !</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab2">
            <h3>Perizinan Berusaha Untuk Menunjang Kegiatan Usaha / PB UMKU</h3>

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
                        <li> Segera hubungi
                          kami untuk jenis detail kategori PB UMKU
                          yang anda butuhkan.
                        </li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Perizinan Berusaha Untuk Menunjang Kegiatan Usaha / PB UMKU') }}">Hubungi
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
