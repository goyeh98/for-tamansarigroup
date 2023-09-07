@extends('layouts.app')

@section('title')
Hak Kekayaan Intelektual
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
          <h2>Hak Kekayaan Intelektual</h2>

          <div class="nav price-tabs" role="tablist">
            <a href="#" class="nav-link active" data-bs-container="body" data-bs-toggle="popover"
              data-bs-placement="bottom" data-bs-content="Merek adalah aset tak berwujud yang harus
                    dilindungi secara hukum, kami siap bantu
                    kawal supaya merek anda aman dan
                    dilindungi.">
              Merek
            </a>
          </div>
        </div>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade show active" id="">
            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Pendaftaran Merek<span class="sup"></span></h3>
                      <h4 class="mb-0"> 7 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>Penelusuran merek</li>
                        <li>Pengesahan merek</li>
                        <li>Pencetakan sertifikat merek</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendaftaran Merek') }}">Hubungi
                          Kami !</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Perpanjangan Merek <span class="sup"></span></h3>
                      <h4 class="mb-0"> 15 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          Sertifikat merek memiliki jangka waktu, terus
                          amankan merek anda dengan melakukan
                          perpanjangan merek.
                        </li>
                        <li>*Syarat dan ketentuan berlaku*</li>
                      </ul>
                      <div class="btn-area">
                        <a
                          href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Perpanjangan Merek') }}">Hubungi
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
      <!--- ignore the code below-->
    </div>
    <!-- End:Section service -->
  </div>
</section><!-- #content end -->
@endsection
