@extends('layouts.app')

@section('title')
Perpajakan
@endsection

@section('content')
<!-- Content
============================================= -->
<section id="content">
  <div class="content-wrap p-0">
    <!-- Section service -->
    <div class="container-fluid bg-light text-center py-5" id="service">
      <div data-animate="fadeInDown faster">
        <h2>Perpajakan</h2>
      </div>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="tab1">
          <h3>PKP / Pengusaha Kena Pajak</h3>

          <div class="pricing-area">
            <div class="row justify-content-center">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-price">
                  <div class="deal-top">
                    <h3>Special Harga ! <span class="sup"></span></h3>
                    <h4 class="mb-0"> 5 <span class="sup">Jt</span> </h4>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                    <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                  </svg>
                  <div class="deal-bottom">
                    <ul class="deal-item">
                      <li>Merupakan pengusaha / perusahaan yang
                        melakukan penyerahan barang/jasa kena
                        pajak yang dikenai PPN menurut Undang-
                        Undang Pajak Pertambahan Nilai.</li>
                      <li> PKP bisa memberi banyak manfaat, bisa
                        bertransaksi dengan pemerintah, serta
                        perusahaan dianggap bonafit dan besar !</li>
                      <li>*Syarat dan ketentuan berlaku*</li>
                    </ul>
                    <div class="btn-area">
                      <a
                        href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan PKP / Pengusaha Kena Pajak') }}">Hubungi
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
    <!-- End:Section service -->
  </div>
</section><!-- #content end -->
@endsection
