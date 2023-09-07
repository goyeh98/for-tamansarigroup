@extends('layouts.app')

@section('title')
Izin ESDM
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
          <h2>Izin ESDM</h2>

          <div class="nav price-tabs" role="tablist">
            <a class="nav-link active" href="#tab1" role="tab" data-bs-toggle="tab" data-bs-target="#tab1">SIPA/IPAT</a>
            <a class="nav-link" href="#tab2" role="tab" data-bs-toggle="tab" data-bs-target="#tab2">Operasi</a>
            <a class="nav-link" href="#tab3" role="tab" data-bs-toggle="tab" data-bs-target="#tab3">Genset</a>
            <a class="nav-link" href="#tab4" role="tab" data-bs-toggle="tab" data-bs-target="#tab4">Listrik</a>
            <a class="nav-link" href="#tab5" role="tab" data-bs-toggle="tab" data-bs-target="#tab5">SKTTK</a>
          </div>
        </div>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade show active" id="tab1">
            <h3>Izin Pemanfaatan Air Tanah (SIPA/IPAT)</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Harga Promo <span class="sup"></span></h3>
                      <h4 class="mb-0"> 7 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>Merupakan izin untuk memperoleh dan/atau
                          mengambil air tanah untuk menunjang
                          kegiatan usaha, baik untuk MCK ataupun
                          Industri.</li>
                        <li>*Syarat dan ketentuan berlaku*</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Izin Pemanfaatan Air Tanah (SIPA/IPAT)') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab2">
            <h3>Izin Operasi</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Harga Promo <span class="sup"></span></h3>
                      <h4 class="mb-0"> 15 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>Merupakan izin untuk pengoperasian
                          SLTD/Genset guna menunjang kepentingan
                          operasional usaha.</li>
                        <li>*Syarat dan ketentuan berlaku*</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Izin Operasi') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab3">
            <h3>Sertifikat Laik Operasi (Genset)</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Harga Promo <span class="sup"></span></h3>
                      <h4 class="mb-0"> 30 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>Merupakan sertifikasi kelaikan fungsi dari
                          genset itu sendiri, menjadi pelengkap dari izin
                          Izin Operasi, biasanya dibutuhkan bagi
                          kepentingan audit bisnis.</li>
                        <li>*Syarat dan ketentuan berlaku*</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Sertifikasi Laik Operasi (Genset)') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab4">
            <h3>Sertifikat Laik Operasi (Listrik)</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Harga Promo <span class="sup"></span></h3>
                      <h4 class="mb-0"> 8 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>Merupakan sertifikasi kelaikan fungsi dari
                          kelistrikan, biasanya merupakan izin dasar
                          apabila bangunan akan di SLF kan atau
                          kepentingan audit bisnis.</li>
                        <li>*Syarat dan ketentuan berlaku*</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Sertifikat Laik Operasi (Listrik)') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab5">
            <h3>SKTTK (Sertifikasi Kompetensi Tenaga Teknik Ketenagalistrikan)</h3>

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
                        <li>Merupakan sertifikasi kompetensi dari
                          operator/tenaga kerja kelistrikan, biasanya
                          merupakan izin dasar apabila bangunan akan
                          di SLF kan atau kepentingan audit bisnis.</li>
                        <li>*Syarat dan ketentuan berlaku*</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan SKTTK (Sertifikasi Kompetensi Tenaga Teknik Ketenagalistrikan)') }}">Hubungi
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
