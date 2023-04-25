<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="https://bpjksimlab.bion.my.id/logo/216814407816438c00d2e769.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="{{ url('css/style.css') }}" type="text/css" rel='stylesheet'>   

    <!-- Template Main CSS File -->
    {{-- <link href="https://bpjksimlab.bion.my.id/tema_landing/assets/css/style.css" rel="stylesheet"> --}}
    <link href="{{ url('css/style.css') }}" type="text/css" rel='stylesheet'>

    <!-- =======================================================
  * Template Name: Medicio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <!-- <i class="bi bi-arrow-up-right-square"></i> -->
                <small>Selamat Datang di  | Balai Pengujian Peralatan Provinsi DI Yogyakarta</small>
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i>
                <small>CS : 6287838182684</small>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="index.html" class="logo me-auto"><img src="https://bpjksimlab.bion.my.id/logo/216814407816438c00d2e769.png" alt="">
                <strong style="color:#333333; font-size: 16px; margin-left: 16px;"></strong>
            </a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#lacak">Lacak</a></li>
                    <li><a class="nav-link scrollto" href="#jenis_pengujian">Jenis Pengujian</a></li>
                    <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#buat_pengajuan" class="appointment-btn scrollto"><span class="d-none d-md-inline">BUAT PENGAJUAN</a>
            {{-- <a href="https://bpjksimlab.bion.my.id/login" class="appointment-btn scrollto"><span class="d-none d-md-inline">LOGIN</a> --}}
                
            @if (Route::has('login'))
                <a class="appointment-btn scrollto" href="{{ route('login') }}"><span class="d-none d-md-inline">{{ __('LOGIN') }}</a>
            @endif

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                
                                <!-- Slide 1  style="background-image: url('https://bpjksimlab.bion.my.id/berkas/21681573110643ac4f6bdfd5.png')" -->
                <div class="carousel-item   active ">
                    <img src="https://bpjksimlab.bion.my.id/berkas/21681573110643ac4f6bdfd5.png" width="100%" alt="">
                    <!-- <div class="container">
                        <p>Coba coba</p>
                    </div> -->
                </div>
                                <!-- Slide 1  style="background-image: url('https://bpjksimlab.bion.my.id/berkas/21681573048643ac4b888ea9.png')" -->
                <div class="carousel-item ">
                    <img src="https://bpjksimlab.bion.my.id/berkas/21681573048643ac4b888ea9.png" width="100%" alt="">
                    <!-- <div class="container">
                        <p>Coba lagi</p>
                    </div> -->
                </div>
                                <!-- Slide 1  style="background-image: url('https://bpjksimlab.bion.my.id/berkas/21681572974643ac46e146dc.png')" -->
                <div class="carousel-item ">
                    <img src="https://bpjksimlab.bion.my.id/berkas/21681572974643ac46e146dc.png" width="100%" alt="">
                    <!-- <div class="container">
                        <p>Coba banner</p>
                    </div> -->
                </div>
                            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Cta Section ======= -->
        <section id="lacak" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>LACAK PESANAN ANDA!</h3>
                    <p> Masukan kode pesanan anda disini!</p>
                    <br><br>
                    <form class="text-center" method="GET" action="">
                        <center>
                            <div class="col-md-4 form-group">
                                <input type="text" value="" name="kode_sampel" class="form-control text-center" id="kode_sampel" placeholder="Kode Sampel" required>
                            </div>
                        </center>
                        <br>
                        <button class="btn btn-outline-light" type="submit">LACAK PENGUJIAN</button>
                    </form>
                </div>

                <div class="row mt-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 border p-3">
                                            </div>
                    <div class="col-md-2"></div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Departments Section ======= -->
        <section id="jenis_pengujian" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Jenis Pengujian</h2>
                    <p>Berikut adalah jenis pengujian yang dapat anda pilih.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">

                            
                            <li class="nav-item">
                                <a class="nav-link   active show " data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>Pengujian Tanah dan Batuan</h4>
                                    <p class="MsoNormal">Berikut berisi Pengujian&nbsp;Tanah&nbsp;dan Batuan&nbsp;</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Pengujian Bahan Bangunan</h4>
                                    <p class="MsoNormal">Berikut adalah Pengujian Bahan&nbsp;Bangunan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>Pengujian Rancangan</h4>
                                    <p>Berikut adalah Pengujian Rancangan</p>
                                </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" data-bs-target="#tab-4">
                                    <h4>Jenis pengujian contoh 4</h4>
                                    <p>Pengujian untuk menguji bahan bangunan</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">

                            
                            <div class="tab-pane   active show " id="tab-1">
                                <h3>Pengujian Tanah dan Batuan</h3>
                                <table class="table table-sm table-striped" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tarif</th>
                                            <th>Satuan</th>
                                            <th>Kode SNI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Analisa ukuran butir tanah</td>
                                            <td>Rp 40.700</td>
                                            <td>Per Contoh</td>
                                            <td>SNI 3423:2008</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane " id="tab-2">
                                <h3>Pengujian Bahan Bangunan</h3>
                                <table class="table table-sm table-striped" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tarif</th>
                                            <th>Satuan</th>
                                            <th>Kode SNI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane " id="tab-3">
                                <h3>Pengujian Rancangan</h3>
                                <table class="table table-sm table-striped" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tarif</th>
                                            <th>Satuan</th>
                                            <th>Kode SNI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane " id="tab-4">
                                <h3>Jenis pengujian contoh 4</h3>
                                <table class="table table-sm table-striped" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tarif</th>
                                            <th>Satuan</th>
                                            <th>Kode SNI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kuat lentur</td>
                                            <td>Rp 20.000</td>
                                            <td>Sample</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Appointment Section ======= -->
        <section id="buat_pengajuan" class="appointment section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Buat Pengujian</h2>
                    <p>Isi form berikut dengan benar dan lengkap!</p>

                                    </div>

                <form method="POST" action="https://bpjksimlab.bion.my.id/pengajuan" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="VjW54XUORmV63N9zrOyE1B96pZwepcZ4dCrhVetb">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="No. HP" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" name="alamat" class="form-control datepicker" id="alamat" placeholder="Alamat" required>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" name="kegiatan" class="form-control datepicker" id="kegiatan" placeholder="Kegiatan/Paket Pekerjaan" required>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" name="sumber" class="form-control datepicker" id="sumber" placeholder="Sumber/Satker" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group mt-3">

                            <select name="id_jenis" id="id_jenis" class="form-select">
                                <option value="">Pilih Jenis Pengujian..</option>
                                                                <option value="1">Pengujian Tanah dan Batuan</option>
                                                                <option value="2">Pengujian Bahan Bangunan</option>
                                                                <option value="3">Pengujian Rancangan</option>
                                                                <option value="4">Jenis pengujian contoh 4</option>
                                                            </select>
                        </div>

                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Catatan..."></textarea>
                    </div>
                    <!-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Pengajuan Pengujian Anda Telah Terkirim!</div>
                    </div> -->
                    <div class="text-center"><button type="submit" class="btn btn-danger mt-3">Buat Pengajuan</button></div>
                </form>

            </div>
        </section><!-- End Appointment Section -->

        <!-- ======= Contact Section ======= -->
        <section id="kontak" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Jabat erat dapat dilakukan disini.</p>
                </div>

            </div>

            <div>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15812.57480477484!2d110.42240746977538!3d-7.774583100000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5a1e97ec5713%3A0x7baa03d8ace53729!2sBalai%20Pengembangan%20Jasa%20Konstruksi%20(BPJK)!5e0!3m2!1sid!2sid!4v1680105577008!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15812.57480477484!2d110.42240746977538!3d-7.774583100000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5a1e97ec5713%3A0x7baa03d8ace53729!2sBalai%20Pengembangan%20Jasa%20Konstruksi%20(BPJK)!5e0!3m2!1sid!2sid!4v1680105577008!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12" hidden>
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Alamat</h3>
                                    <p>Jalan Ring Road Utara Maguwoharjo, Depok, Kabupaten Sleman Kode Pos 55281</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class='bx bxl-chrome'></i>
                                    <h3>Website</h3>
                                    <a href="https://bpjk.jogjaprov.go.id/" target="_blank">https://bpjk.jogjaprov.go.id/</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class='bx bxl-youtube'></i>
                                    <h3>Youtube</h3>
                                    <a href="https://youtu.be/V7W5PAiWrk8" target="_blank">https://youtu.be/V7W5PAiWrk8</a>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="info-box mt-4">
                                    <i class="bx bxl-instagram"></i>
                                    <h3>Instagram</h3>
                                    <iframe class="col-md-12 px-5" height="300" src="https://www.instagram.com/lab.konstruksi/embed" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda" required="">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Keperluan" required="">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; 2022 - 2023 Dikembangkan Oleh:
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
                 <a href="#">Balai Pengujian Peralatan Provinsi DI Yogyakarta</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="https://api.whatsapp.com/send?phone=6287838182684&text=" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/aos/aos.js"></script>
    <script src="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://bpjksimlab.bion.my.id/tema_landing/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="https://bpjksimlab.bion.my.id/tema_landing/assets/js/main.js"></script>

</body>

</html>