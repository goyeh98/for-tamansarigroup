@extends('layouts.app')

@section('title')
Ketenagakerjaan
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
          <h2>Ketenagakerjaan</h2>

          <div class="nav price-tabs" role="tablist">
            <a class="nav-link active" href="#tab1" role="tab" data-bs-toggle="tab" data-bs-target="#tab1">PKB</a>
            <a class="nav-link" href="#tab2" role="tab" data-bs-toggle="tab" data-bs-target="#tab2">LKS Bipartit</a>
            <a class="nav-link" href="#tab3" role="tab" data-bs-toggle="tab" data-bs-target="#tab3">P2K3</a>
            <a class="nav-link" href="#tab4" role="tab" data-bs-toggle="tab" data-bs-target="#tab4">Apar, dll</a>
          </div>
        </div>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade show active" id="tab1">
            <h3 style="text-align:center">Pembuatan dan Pengesahan Peraturan Perusahaan / PKB</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Harga Promo<span class="sup"></span></h3>
                      <h4 class="mb-0"> 6 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight14" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight14"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Free Template Peraturan Perusahaan</li>
                                <li class="text-dark">Pengesahan Dinas Tenaga Kerja Kabupaten</li>
                                <li class="text-dark">Provinsi atau Kementerian Ketenagakerjaan</li>
                                <li class="text-dark">*syarat dan ketentuan berlaku*</li>
                                <li class="text-dark">Kasih Tahu Kami Letak Perusahaan Anda</li>
                              </ul>
                              <div class="btn-area">
                                <a
                                  href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pembuatan dan Pengesahan Peraturan Perusahaan / PKB') }}">Booking
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

          <div role="tabpanel" class="tab-pane fade " id="tab2">
            <h3 style="text-align:center">Pengesahan LKS Bipartit</h3>

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
                            data-bs-target="#offcanvasRight15" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight15"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Template Permohonan</li>
                                <li class="text-dark">Struktur
                                  Kepengurusan serta Pengesahan Dinas
                                  Tenaga Kerja</li>
                                <li class="text-dark">Free Template Laporan LKS Bipartit</li>
                                <li class="text-dark">*syarat dan ketentuan berlaku*</li>
                                <li class="text-dark">Kasih Tahu Kami Letak Perusahaan Anda</li>
                              </ul>
                              <div class="btn-area">
                                <a
                                  href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pengesahan LKS Bipartit') }}">Booking
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

          <div role="tabpanel" class="tab-pane fade " id="tab3">
            <h3 style="text-align:center">Pengesahan P2K3</h3>

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
                            data-bs-target="#offcanvasRight16" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight16"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Template Permohonan</li>
                                <li class="text-dark">Struktur Pengurus
                                  serta pengesahan Dinas Pengawas
                                  Ketenagakerjaan</li>
                                <li class="text-dark">Free Template Laporan Triwulan P2K3</li>
                                <li class="text-dark">*syarat dan ketentuan berlaku*</li>
                                <li class="text-dark">Kasih Tahu Kami Letak Perusahaan Anda</li>
                              </ul>
                              <div class="btn-area">
                                <a
                                  href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pengesahan P2K3') }}">Booking
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

          <div role="tabpanel" class="tab-pane fade" id="tab4">
            <h3 style="text-align:center">Surat Pengesahan Apar, Forklif, Penangkal Petir, Motor Diesel, Kompresor,dll
            </h3>

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
                            data-bs-target="#offcanvasRight17" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight17"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Per Kategori sudah termasuk:</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Template Permohonan</li>
                                <li class="text-dark">Verfikasi Lapangan serta Pengesahan Dinas
                                  Pengawasan Ketenagakerjaan</li>
                                <li class="text-dark">*syarat dan ketentuan berlaku*</li>
                                <li class="text-dark">Kasih Tahu Kami Letak Perusahaan Anda</li>
                              </ul>
                              <div class="btn-area">
                                <a
                                  href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Surat Pengesahan Apar, Forklif, Penangkal Petir, Motor Diesel, Kompresor,dll') }}">Booking
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
        </div>
      </div>
      <!--- ignore the code below-->
    </div>
    <!-- End:Section service -->
  </div>
</section><!-- #content end -->
@endsection
