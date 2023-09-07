@extends('layouts.app')

@section('title')
Tanah dan Bangunan
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
          <h2>Tanah dan Bangunan</h2>

          <div class="nav price-tabs" role="tablist">
            <a class="nav-link active" href="#tab1" role="tab" data-bs-toggle="tab" data-bs-target="#tab1">Site Plan</a>
            <a class="nav-link" href="#tab2" role="tab" data-bs-toggle="tab" data-bs-target="#tab2">IMB / PBG</a>
            <a class="nav-link" href="#tab3" role="tab" data-bs-toggle="tab" data-bs-target="#tab3">SLF</a>
            <a class="nav-link" href="#tab4" role="tab" data-bs-toggle="tab" data-bs-target="#tab4">IPPT</a>
            <a class="nav-link" href="#tab5" role="tab" data-bs-toggle="tab" data-bs-target="#tab5">TDG</a>
          </div>
        </div>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade show active" id="tab1">
            <h3>Site Plan</h3>

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
                        <li> Merupakan gambar 2 dimensi berisi konsep
                          rencana tata bangunan dalam skala batas
                          luas tertentu yang kemudian di sahkan oleh
                          pemerintah daerah.
                        </li>
                        <li>Segera konsultasikan dengan kami untuk mendapatkan info lebih lanjut.</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Site Plan') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab2">
            <h3>IMB / PBG</h3>

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
                        <li> Merupakan perizinan yang berikan kepada
                          pemilik bangunan gedung untuk membangun
                          baru, mengubah, memperluas, mengurangi
                          sesuai peraturan yang berlaku.
                        </li>
                        <li>Segera konsultasikan dengan kami untuk mendapatkan info lebih lanjut.</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan IMB / PBG') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab3">
            <h3>Sertifikat Laik Fungsi / SLF</h3>

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
                        <li> Merupakan perizinan yang berikan kepada
                          pemilik bangunan gedung yang menyatakan
                          bahwa bangunan gedung tersebut laik fungsi
                          secara struktur, mekanikal elektrikal dan
                          plumping. Biasanya SLF ini dibutuhkan untuk
                          audit bisnis.
                        </li>
                        <li>Segera konsultasikan dengan kami untuk mendapatkan info lebih lanjut.</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Sertifikat Laik Fungsi / SLF') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab4">
            <h3>IPPT</h3>

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
                        <li> Merupakan perizinan yang berikan sebagai
                          dasar dalam memanfaatkan tanah.
                          Merupakan izin dasar untuk pengurusan
                          IMB/PBG, SLF, serta izin lainnya.
                        </li>
                        <li>Segera konsultasikan dengan kami untuk mendapatkan info lebih lanjut.</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan IPPT') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab5">
            <h3>TDG</h3>

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
                        <li> Merupakan perizinan yang berikan kepada
                          pemilik bangunan gudang untuk menyatakan
                          legalitas gudang.
                        </li>
                        <li>Segera konsultasikan dengan kami untuk mendapatkan info lebih lanjut.</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan TDG') }}">Hubungi
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
