@extends('layouts.app')

@section('title')
Pendirian Badan Usaha
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
          <h2>Pendirian Badan Usaha</h2>

          <div class="nav price-tabs" role="tablist">
            <a class="nav-link active" href="#tab1" role="tab" data-bs-toggle="tab" data-bs-target="#tab1">Pendirian PT
              (Perseroan Terbatas)</a>
            <a class="nav-link" href="#tab2" role="tab" data-bs-toggle="tab" data-bs-target="#tab2">Pendirian
              CV</a>
            <a class="nav-link" href="#tab3" role="tab" data-bs-toggle="tab" data-bs-target="#tab3">Pendirian
              PT
              (Perseroan Perorangan)</a>
            <a class="nav-link" href="#tab4" role="tab" data-bs-toggle="tab" data-bs-target="#tab4">Pendirian
              Yayasan</a>
            <a class="nav-link" href="#tab5" role="tab" data-bs-toggle="tab" data-bs-target="#tab5">Pendirian
              Koperasi</a>
          </div>
        </div>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade show active" id="tab1">
            <h3>Pendirian PT (Perseroan Terbatas)</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>UMK<span class="sup">Standar</span></h3>
                      <h4 class="mb-0"> 6 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan/Usaha</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian PT (Perseroan Terbatas) UMK Standar') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>UMK <span class="sup">Premium</span></h3>
                      <h4 class="mb-0"> 8.5 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan/Usaha</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">NIB</li>
                                <li class="text-dark">Sertifikat Standar (jika diperlukan)</li>
                                <li class="text-dark">Free Peta Polygon</li>
                                <li class="text-dark">Konsultasi 60 menit</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian PT (Perseroan Terbatas) UMK Premium') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Non UMK <span class="sup">Standar</span></h3>
                      <h4 class="mb-0"> 10 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan nama Perseroan</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">Konsultasi 60 Menit</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian PT (Perseroan Terbatas) Non UMK Standar') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3>Non UMK <span class="sup">Premium</span></h3>
                      <h4 class="mb-0"> 15 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight3"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">NIB</li>
                                <li class="text-dark">PKKPR</li>
                                <li class="text-dark">Sertifikat Standar</li>
                                <li class="text-dark">Free Peta Polygon</li>
                                <li class="text-dark">Konsultasi 60 Menit</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian PT (Perseroan Terbatas) Non UMK Premium') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
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
            <h3>Pendirian CV (Persekutuan Komanditer)</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3> <span class="sup">Standar</span></h3>
                      <h4 class="mb-0"> 6 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight4" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight4"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan/Usaha</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian CV (Persekutuan Komanditer) Standar') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3><span class="sup">Premium</span></h3>
                      <h4 class="mb-0"> 8.5 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight5" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight5"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan/Usaha</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">Pengurusan Izin OSS RBA meliputi NIB, Free Peta Polygon,
                                  Sertifikat Standar (jika diperlukan)</li>
                                <li class="text-dark">Konsultasi 60 Menit</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian CV (Persekutuan Komanditer) Premium') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
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

          <div role="tabpanel" class="tab-pane fade" id="tab3">
            <h3>Pendirian PT (Perseroan Perorangan)</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3> <span class="sup">Standar</span></h3>
                      <h4 class="mb-0"> 4.5 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight6" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight6"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan/Usaha</li>
                                <li class="text-dark">Pernyataan Mandiri Pendirian Perseroan Secara Elektronik
                                </li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian PT (Perseroan Perorangan) Standar') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3><span class="sup">Premium</span></h3>
                      <h4 class="mb-0"> 7 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight7" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight7"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan/Usaha</li>
                                <li class="text-dark">Pernyataan Mandiri Pendirian Perseroan Secara Elektronik
                                </li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">Pengurusan Izin OSS RBA meliputi NIB, Free Peta Polygon,
                                  Sertifikat Standar (jika diperlukan)</li>
                                <li class="text-dark">Konsultasi 60 Menit </li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian PT (Perseroan Perorangan) Premium') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
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
            <h3>Pendirian Yayasan</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3> <span class="sup">Standar</span></h3>
                      <h4 class="mb-0"> 10 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight8" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight8"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan nama Yayasan</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">Surat Domisili Yayasan</li>
                                <li class="text-dark">Konsultasi 60 Menit</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian Yayasan Standar') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3><span class="sup">Premium</span></h3>
                      <h4 class="mb-0"> 15 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight9" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight9"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">Surat Domisili Yayasan</li>
                                <li class="text-dark">NIB</li>
                                <li class="text-dark">PKKPR</li>
                                <li class="text-dark">Free Peta Polygon</li>
                                <li class="text-dark">Sertifikat Standar</li>
                                <li class="text-dark">Konsultasi 60 Menit</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian Yayasan Premium') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
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

          <div role="tabpanel" class="tab-pane fade" id="tab5">
            <h3>Pendirian Koperasi</h3>

            <div class="pricing-area">
              <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3> <span class="sup">Standar</span></h3>
                      <h4 class="mb-0"> 19.5 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight10" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight10"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan nama Koperasi</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">Rekomendasi Dinas Koperasi</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">Surat Domisili Koperasi</li>
                                <li class="text-dark">Konsultasi 60 Menit</li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian Koperasi Standar') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-price">
                    <div class="deal-top">
                      <h3><span class="sup">Premium</span></h3>
                      <h4 class="mb-0"> 25 <span class="sup">Jt</span> </h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -1px;">
                      <path fill="#6a9fc1" fill-opacity="1" d="M0,96L720,224L1440,96L1440,0L720,0L0,0Z"></path>
                    </svg>
                    <div class="deal-bottom">
                      <ul class="deal-item">
                        <li>
                          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight11" aria-controls="offcanvasRight">Selengkapnya</button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight11"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel" class="offcanvas-title">Paket ini termasuk :</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul>
                                <li class="text-dark">Pengecekan Nama Perseroan</li>
                                <li class="text-dark">Akta Pendirian</li>
                                <li class="text-dark">SK Menkumham</li>
                                <li class="text-dark">NPWP</li>
                                <li class="text-dark">SKT/Surat Keterangan Terdaftar</li>
                                <li class="text-dark">Surat Domisili Yayasan</li>
                                <li class="text-dark">Rekomendasi Dinas Koperasi</li>
                                <li class="text-dark">NIB</li>
                                <li class="text-dark">PKKPR</li>
                                <li class="text-dark">Free Peta Polygon</li>
                                <li class="text-dark">Sertifikat Standar</li>
                                <li class="text-dark">Konsultasi 60 Menit </li>
                              </ul>
                              <div class="btn-area">
                                <a href="https://wa.me/6281330587269?text={{ urlencode('Halo kak, saya mau pesan layanan Pendirian Koperasi Premium') }}"
                                  style="background-color:#202B5E">Booking Now !</a>
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
    </div>
    <!-- End:Section service -->
  </div>
</section><!-- #content end -->
@endsection
