@extends('layouts.app')

@section('title')
Tentang Kami
@endsection

@section('content')
<!-- Content
============================================= -->
<section id="content" class="about">
    <div class="content-wrap p-0">
        <div class="container-fluid py-5" id="section_1">
            <div class="container">
                <div class="text-center mb-0" data-animate="fadeInDown faster">
                    <h2 class="text-primary text-capitalize mb-0">Tentang Kami</h2>
                </div>

                <div class="text-center my-3" data-animate="fadeInDown faster">
                    <img src="{{ asset('assets/img/dsa.png') }}" alt="Logo DSA" style="height: 150px;">
                </div>

                <p class="text-center" data-animate="fadeInDown faster">PT. DSA LEGAL NETWORK adalah sebuah perseroan
                    perorangan yang berbentuk PT
                    yang didirikan pada 18 November 2021 berkedudukan di Kabupaten Bogor. Kegiatan
                    usaha perseroan adalah aktivitas konsultan hukum mencangkup namun tidak terbatas
                    pada penyusunan dokumen hukum, dokumen badan hukum (perizinan dan legalitas
                    lainnya), perjanjian-perjanjian, penyiapan akta notaris serta kegiatan administrasi lainnya.</p>
            </div>
        </div>

        <div class="container-fluid text-white py-5" id="section_2" style="background-color: #025c94">
            <div class="container">
                <div class="heading-block text-center" data-animate="fadeInDown faster">
                    <h2 class="text-capitalize text-white mb-0">Tim Colex</h2>
                </div>

                <div class="container1">
                    <div class="row" data-animate="fadeInLeft faster">
                        <div class="col-md-2">
                            <img src="assets/img/DSC04327.png" alt="deni" style="max-height:300px;">
                        </div>
                        <div class="col-md-10">
                            <h3 class="text-white">Deni Syamsul Arviyanto</h3>
                            <p style="text-align:justify">
                                Warga Negara Indonesia, Kelahiran 12 Maret 1996 di Tangerang, lulusan Universitas
                                Trisakti Fakultas Hukum (2019), Pendidikan Khusus Profesi Advokat (2019), Program
                                Magister Hukum Universitas Trisakti (2021). Beliau adalah pendiri sekaligus pengurus
                                dari perseoran ini. Awal karir dimulai sebagai Staff HRD dibidang ketenagakerjaan di PT.
                                Batara Indah (2018-2019), kemudian menjadi Legal Officer di PT. Perma Plasindo (2019-
                                2021) kemudian menjabat sebagai In House Lawyer di Bantex Group (hingga saat ini)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container2">
                    <div class="row" data-animate="fadeInRight faster">
                        <div class="col-md-10">
                            <h3 class="text-end text-white">Irvan Triansyah</h3>
                            <p style=" text-align:justify;">
                                Warga Negara Indonesia, Lahir di Bogor tanggal 10 Juli 1997, lulusan Institute Pertanian
                                Bogor Fakultas Pangan (2020), Program Magister Teknik Pangan Institute Pertanian
                                Bogor (2021). Awal karir dimulai sebagai legal officer pada PT. DSA LEGAL NETWORK
                                pada tahun 2021 hingga sekarang
                            </p>
                        </div>
                        <div class="col-md-2 text-end">
                            <img src="assets/img/irvan.png" alt="irvan" style="max-height:320px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5" id="section_3">
            <div class="container">
                <div class="postcontent">
                    <div id="posts" class="post-timeline">
                        <div class="entry" data-animate="fadeInDown faster">
                            <div class="entry-timeline">
                                <i class="icon-play" style="font-size: 38px;width: 64px"></i>
                                <div class="timeline-divider"></div>
                            </div>
                            <div class="entry-title" style="padding-top: 35px">
                                <h2>Visi-Misi Kami</h2>
                            </div>
                            <div class="entry-content">
                                <ul>
                                    <li>Colex berupaya memberikan pelayanan yang cepat, praktis, inovatif, fleksibel
                                        serta
                                        profesional sesuai dengan kebutuhan klien</li>
                                    <li>Colex mendorong segala batasan agar tercapainya tujuan dan kepentingan klien
                                        kami.</li>
                                    <li>Colex berupaya memberikan pelayanan yang berkesan dan menyenangkan</li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry" data-animate="fadeInDown faster">
                            <div class="entry-timeline">
                                <i class="icon-play" style="font-size: 38px;width: 64px"></i>
                                <div class="timeline-divider"></div>
                            </div>
                            <div class="entry-title" style="padding-top: 35px">
                                <h2>Pengalaman Kami</h2>
                            </div>
                            <div class="entry-content">
                                <p class="mb-0">Kami telah bekerjasama dan membantu PT. Perma Plasindo serta entitas
                                    anak usaha
                                    atau afiliasinya diberbagai sektor legal meliputi:</p>
                                <ul>
                                    <li>Pemeliharaan legalitas usaha baik terhadap hal-hal yang sifatnya rutinitas
                                        seperti
                                        laporan dan memantau jadwal perpanjangan perizinan perseoran ataupun per project
                                        seperti sertifikasi produk atau pengajuan perizinan usaha baru.</li>
                                    <li>Membantu mengsukseskan project dalam rangka perusahaan sedang proses Initial
                                        Public Offering (IPO) atau Go-Public PT. Perma Plasindo.</li>
                                    <li>Membantu mensupport project TKDN PT. Batara Indah terhadap 11 kategori produk
                                        alat tulis kantor oleh lembaga SUCOFINDO.</li>
                                    <li>Membantu PT. Batara Indah dalam proses sertifikasi Eko-Label pada Kementerian
                                        Lingkungan Hidup.</li>
                                    <li>Membantu PT. Batara Indah dalam proses penerbitan Izin Operasi dan Sertifikat
                                        Laik
                                        Operasi untuk PLTD/Genset 660 KVA</li>
                                    <li>Membantu maintenance sistem Online Single Submission Risk Based Approach (OSS
                                        RBA).</li>
                                    <li>Membantu PT. Bino Mitra Sejati dalam proses izin lingkungan UKL-UPL.</li>
                                    <li>Membantu PT. Bino Mitra Sejati dalam proses Tanda Daftar Gudang.</li>
                                    <li>Membantu PT. Perma Plasindo terhadap project Sertifikat Laik Fungsi Bangunan di
                                        Cikarang, Klaten, dan Makassar.</li>
                                    <li>Serta support-support legalitas lainnya.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry" data-animate="fadeInDown faster">
                            <div class="entry-timeline">
                                <i class="icon-play" style="font-size: 38px;width: 64px"></i>
                                <div class="timeline-divider"></div>
                            </div>
                            <div class="entry-title" style="padding-top: 35px">
                                <h2>Legalitas Kami</h2>
                            </div>
                            <div class="entry-content">
                                <p>PT. DSA LEGAL NETWORK terdaftar pada sistem Online Single Submission Risk Based
                                    Approach dengan Nomor Induk Berusaha (NIB) 2111210004455 serta Sertifikat
                                    Pendaftaran Pendirian Perseroan Perorangan Nomor: AHU-003885.AH.01.30.Tahun 2021
                                    pada tanggal 18 November 2021. Perseroan memiliki No. NPWP 53.308.496.8-434.000
                                    serta memiliki perizinan berusaha Sertifikat Standar No. 21112100044550001
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5" id="section_4" style="background-color: #e3f2fc">
            <div class="container">
                <div class="container4 p-3 pt-4"
                    style="background-color: #025c94;color:white; border-radius: 10px 10px 10px 10px"
                    data-animate="fadeInUp faster">
                    <h2 class="text-center text-white">Syarat dan Ketentuan Penggunaan COLEX berlaku sejak
                        November 2021</h2>
                    <h5 class="text-white" style="margin-left:10px;">Harap membaca seluruh ketentuan penggunaan ini baik
                        sebelum menggunakan atau
                        pada saat menggunakan website COLEX, berikut ini:</h5>
                    <span style="margin-left:10px;"> <b>Ketentuan Umum </b></span>
                    <p style="text-indent:20px; margin: 10px; text-align: justify">Ketentuan penggunaan ini adalah
                        perjanjian yang mengikat antara Pengguna (dalam
                        hal ini disebut “Anda”) dan PT. DSA LEGAL NETWORK (dalam hal ini disebut “Kami”),
                        sebuah perseroan perorangan yang berkedudukan di Kabupaten Bogor dan berdiri
                        secara sah berdasarkan hukum negara republik Indonesia. Ruang lingkup ketentuan ini
                        mencangkup akses dan pemanfaatan Anda terhadap situs web https://dsacolex.id dan
                        situs web lainnya yang Kami kelola). Konten dan produk (dalam hal ini jasa) yang
                        disediakan oleh Kami selanjutnya dalam hal ini disebut “Layanan”).
                        Dengan tetap mengakses situs web ini, berarti Anda menyetujui dan sepakat serta
                        bersedia terikat dengan perjanjian ketentuan penggunaan situs web ini termasuk pada
                        perubahan-perubahan ketentuan dikemudian hari. Anda dipersilahkan untuk
                        meninggalkan situs web ini jika tidak setuju dengan ketentuan penggunaan ini.</p>
                    <span style="margin-left:10px;"><b>Penggunaan dan Layanan</b></span>
                    <ul style="margin-left:30px; text-align: justify; margin-right:10px">
                        <li>Situs web ini menyediakan layanan dan bantuan hukum atas badan usaha
                            sebagaimana terurai dalam layanan situs web ini.</li>
                        <li>Situs web ini dapat diakses secara penuh oleh siapapun yang telah berusia setidaktidaknya
                            18 tahun.</li>
                        <li>Agar tidak terjadi kesalahpahaman, harap dikonsultasikan terlebih dahulu mengenai
                            kedudukan usaha, kegiatan usaha dan menguraikan permasalahan serta bantuan
                            hukum apa yang diinginkan.</li>
                        <li>Lama waktu pengerjaan layanan tergantung pada jenis izin yang diminta serta
                            kelengkapan dokumen yang diberikan kepada Kami</li>
                        <li>Metode pembayaran atas pengerjaan layanan dapat dilakukan dengan termin
                            pembayaran atau dibayar langsung secara penuh, tergantung jenis izin yang sedang
                            diproses.</li>
                        <li>Anda berhak untuk bertanya dan meminta informasi atas setiap progress pengerjaan
                            layanan yang diminta.</li>
                        <li>Harap diperhatikan secara cermat poin-poin penawaran serta invoice yang Anda
                            diterima. Uang yang sudah ditransfer ke rekening Kami tidak dapat dikembalikan.</li>
                        <li>Harga layanan dalam situs web ini sewaktu-waktu dapat berubah sesuai kondisi dan
                            ketentuan tertentu.</li>
                        <li>Apabila dipandang perlu, segala isi dari ketentuan ini akan ditinjau ulang,
                            disempurnakan dengan melakukan perubahan-perubahan, termasuk pula bagi halhal
                            yang belum cukup diatur dalam ketentuan ini</li>
                        <li>Ketentuan dalam situs web ini hanya dapat diubah, diganti, ditambah dan
                            dimodifikasi oleh Kami.</li>
                    </ul>
                    <span style="margin-left:10px;"><b>Hukum Yang Berlaku & Penyelesaian Perselisihan</b></span>
                    <ul style="margin-left:30px; text-align: justify; margin-right:10px">
                        <li>Segala ketentuan dalam situs web ini diatur dan ditafsirkan berdasarkan hukum
                            negara republik Indonesia.</li>
                        <li>Situs https://dsacolex.id nama, jenis font, kombinasi warna, desain grafis, logo, teks,
                            video, audio serta apapun yang didefinisikan sebagai merek dimiliki secara sah dan
                            legal oleh Kami serta dilindungi oleh hak cipta dan merek dagang ( Undang-Undang
                            Nomor 28 Tahun 2014 tentang Hak Cipta, Undang-Undang Nomor 20 Tahun 2016
                            tentang Merek dan Indikasi Geografis)</li>
                        <li>Apabila dalam pelaksanaan ketentuan ini terjadi perselisihan, maka kedua belah
                            pihak sepakat untuk menyelesaikan secara maksimal melalui kekeluargaan. Dalam
                            hal tidak tercapai melalui kekeluargaan, maka kedua belah pihak setuju untuk
                            menyerahkan penyelesaian perselisihan melalui Pengadilan Negeri Bogor.</li>
                    </ul>
                    <span style="margin-left:10px;"><b>Penutup</b></span>
                    <ul style="margin-left:30px; text-align: justify; margin-right:10px;">
                        <li>Dengan tetap mengakses situs web ini Anda berarti telah membaca, mencermati
                            dan memahami segala ketentuan yang terdapat dalam situs web ini.</li>
                        <li>Dengan tetap mengakses situs web ini Anda telah sepakat dan menyetujui terhadap
                            segala isi dari ketentuan situs web ini termasuk perubahan-perubahan dikemudian
                            hari, dalam keadaan sadar,sehat jasmani dan rohani, serta tanpa tekanan dari pihak
                            manapun.</li>
                        <li>Anda tidak diperkenankan melibatkan Kami baik secara langsung maupun tidak
                            langsung apabila terjadi perselisihan dengan tuntutan hukum atau non hukum yang
                            dilakukan pihak lain berkaitan dengan usaha/kegiatan Anda.</li>
                        <li>Dengan tetap mengakses situs web ini Anda sepakat untuk mematuhi dan
                            melaksanakan segala ketentuan dalam situs web ini atas dasar itikad baik.</li>
                    </ul>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E3F2FC" fill-opacity="1"
                d="M0,64L80,96C160,128,320,192,480,224C640,256,800,256,960,229.3C1120,203,1280,149,1360,122.7L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>
    </div>
</section><!-- #content end -->
@endsection
