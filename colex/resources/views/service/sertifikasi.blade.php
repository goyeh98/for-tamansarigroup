@extends('layouts.app')

@section('title')
Sertifikasi
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
          <h2>Sertifikasi</h2>

          <div class="nav price-tabs" role="tablist">
            <a class="nav-link active" href="#tab1" role="tab" data-bs-toggle="tab" data-bs-target="#tab1">SNI</a>
            <a class="nav-link" href="#tab2" role="tab" data-bs-toggle="tab" data-bs-target="#tab2">TKDN</a>
            <a class="nav-link" href="#tab3" role="tab" data-bs-toggle="tab" data-bs-target="#tab3">EKOLABEL</a>
          </div>
        </div>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade show active" id="tab1">
            <h3>SNI</h3>

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
                        <li> Merupakan suatu sertifikasi produk untuk bisa
                          dijual-belikan/tender dalam lingkungan
                          komersil umum atau pemerintah/BUMN.
                          Karena pemerintah sudah menggalakan agar
                          produk dari industri nasional segera
                          melabelkan SNI pada produknya. Biasanya
                          ada permintaan pasar terhadap produk
                          tertentu harus memenuhi SNI.
                        </li>
                        <li>Ingin usaha anda bersaing aman dan tenang ?</li>
                        <li>Ada harga special menanti anda</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan SNI') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab2">
            <h3>TKDN</h3>

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
                        <li> Merupakan suatu sertifikasi produk untuk bisa
                          ikut dalam kegiatan tender dalam lingkungan
                          pemerintah atau BUMN. Karena pemerintah
                          sudah menetapkan dalam berbelanja
                          kebutuhan kerja harus mempertimbangkan
                          kandungan produk lokal
                        </li>
                        <li>Ingin usaha anda bersaing aman dan tenang ?</li>
                        <li>Ada harga special menanti anda</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan TKDN') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab3">
            <h3>EKOLABEL</h3>

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
                        <li> Merupakan suatu sertifikasi produk untuk bisa
                          dijual-belikan dalam lingkungan pemerintah
                          atau BUMN. Karena pemerintah sudah
                          menetapkan dalam berbelanja kebutuhan
                          kerja harus mempertimbangkan aspek ramah
                          lingkungan.
                        </li>
                        <li>Ingin usaha anda bersaing aman dan tenang ?</li>
                        <li>Ada harga special menanti anda</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan EKOLABEL') }}">Hubungi
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
