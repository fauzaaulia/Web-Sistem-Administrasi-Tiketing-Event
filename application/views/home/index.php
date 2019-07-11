<!DOCTYPE html>
<html lang="en">

<head>
    <title>S.A.T.E &mdash; Sistem Administrasi Ticket Event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="<?= base_url('assets/'); ?>stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo"><a href="<?= base_url(''); ?>">S.A.T.E</a></div>
                    <div>
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home" class="nav-link">Home</a></li>
                                <li><a href="#about" class="nav-link">Tentang</a></li>
                                <li><a href="#proses" class="nav-link">Proses</a></li>
                                <li><a href="#keunggulan" class="nav-link">Keunggulan</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ml-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block">
                                <li class="cta"><a href="<?= base_url('auth'); ?>" class="nav-link"><span class="rounded border border-primary">Login</span></a></li>
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 mr-auto" data-aos="fade-up">
                        <h1>Sistem Administrasi Ticket Event.</h1>
                        <p class="mb-5"><b>Dimanapun, kapanpun, Jual tiket jadi gampang</b></p>
                        <p><a href="<?= base_url('auth/registration'); ?>" class="btn btn-outline-light py-3 px-5">Dapatkan Sekarang</a></p>

                    </div>
                    <div class="col-lg-2 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <figure class="img-absolute">
                            <img src="<?= base_url('assets/'); ?>images/person_6.jpg" alt="Image" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section section-1" id="about">


            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mr-auto mb-5">

                        <div class="mb-5">
                            <span class="section-sub-title d-block">Tentang S.A.T.E (Sistem Administrasi Ticket Event)</span>
                            <h2 class="section-title">Dimanapun, Kapanpun,<br><i>Jual Tiket jadi Gampang</i></h2>
                            <p>S.A.T.E (Sistem Administrasi Ticket Event) merupakan sistem pengelola (management) event untuk suatu organisasi agar dapat terstruktur dengan baik</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="">
                                    <div class="icon-wrap"><span class="flaticon-reload text-primary"></span></div>
                                    <div class="counter-text">
                                        <strong>100%</strong>
                                        <span>Fast Loading</span>
                                    </div>
                                </div>

                                <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon-wrap"><span class="flaticon-download text-primary"></span></div>
                                    <div class="counter-text">
                                        <strong>2,500</strong>
                                        <span>Download Laporan </span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-wrap"><span class="flaticon-monitor text-primary"></span></div>
                                    <div class="counter-text">
                                        <strong>87</strong>
                                        <span>Pengguna</span>
                                    </div>
                                </div>

                                <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-wrap"><span class="flaticon-chat text-primary"></span></div>
                                    <div class="counter-text">
                                        <strong>920</strong>
                                        <span>Pertemuan</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-absolute-box">
                            <div class="box" data-aos="fade-up">
                                <div class="icon-wrap"><span class="flaticon-vector"></span></div>
                                <h3>Full Responsive</h3>
                                <p>Mudah digunakan hingga smartphone beresolusi 300px sekalipun.</p>
                            </div>
                            <img src="<?= base_url('assets/'); ?>images/about_1.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="site-section section-2" id="proses">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <span class="section-sub-title d-block">Our Process</span>
                        <h2 class="section-title">Alur Proses</h2>
                        <p>Daftar hingga penjualan dilakukan dengan mudah dan cepat.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="process p-3">
                            <span class="number">01</span>
                            <div>
                                <span class="flaticon-glasses display-4 text-primary mb-4 d-inline-block"></span>
                                <h3>Daftar</h3>
                                <p>Daftarkan Organisasimu secara gratis dan cuma-cuma.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="process p-3">
                            <span class="number">02</span>
                            <div>
                                <span class="flaticon-vector display-4 text-primary mb-4 d-inline-block"></span>
                                <h3>Buat Event</h3>
                                <p>Management Ticket Event Organisasimu sekarang juga.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="process p-3">
                            <span class="number">03</span>
                            <div>
                                <span class="flaticon-monitor display-4 text-primary mb-4 d-inline-block"></span>
                                <h3>Jual Tiket</h3>
                                <p>Langsung jual tiketnya kapanpun dimana saja. Dan Buat Laporan penjualan tiket dengan sekali klik.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light" id="keunggulan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <span class="section-sub-title d-block">Keunggulan</span>
                        <h2 class="section-title">Keunggulan Kita</h2>
                        <p>Apa yang kita unggulkan dari S.A.T.E?</p>
                    </div>
                </div>

            </div>

            <div class="owl-carousel nonloop-block-14">

                <div class="service">
                    <div>
                        <span class="flaticon-reload display-4 text-primary mb-4 d-inline-block"></span>
                        <h3>Managemen Event</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
                    </div>
                </div>


                <div class="service">
                    <div>
                        <span class="flaticon-download display-4 text-primary mb-4 d-inline-block"></span>
                        <h3>Download Laporan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
                    </div>
                </div>

                <div class="service">
                    <div>
                        <span class="flaticon-monitor display-4 text-primary mb-4 d-inline-block"></span>
                        <h3>Praktis dan Efisien</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
                    </div>
                </div>

                <div class="service">
                    <div>
                        <span class="flaticon-chat display-4 text-primary mb-4 d-inline-block"></span>
                        <h3>Support 24Jam</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
                    </div>
                </div>

                <div class="service">
                    <div>
                        <span class="flaticon-glasses display-4 text-primary mb-4 d-inline-block"></span>
                        <h3>Mudah Digunakan</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
                    </div>
                </div>

                <div class="service">
                    <div>
                        <span class="flaticon-vector display-4 text-primary mb-4 d-inline-block"></span>
                        <h3>Desain Responsif</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
                    </div>
                </div>



            </div>

        </div>


        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Tentang S.A.T.E</h3>
                        <p>S.A.T.E (Sistem Administrasi Ticket Event) merupakan sistem pengelola (management) event untuk suatu organisasi agar dapat terstruktur dengan baik.</p>
                    </div>

                    <div class="col-md-4">
                        <h3>Subscribe</h3>
                        <p>Pastikan kamu dapatkan update terbaru mengenai fitur sate dengan mengisi email dibawah ini!!</p>
                        <form action="#">
                            <div class="d-flex mb-5">
                                <input type="text" class="form-control rounded-0" placeholder="Email">
                                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                            </div>
                        </form>
                    </div>

                </div>

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> and Modif by <a href="https://fauza.id" target="_blank">Ahmad Fauza Aulia</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>



    </div> <!-- .site-wrap -->

    <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery-ui.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.stellar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.countdown.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('assets/'); ?>js/aos.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.fancybox.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.sticky.js"></script>


    <script src="<?= base_url('assets/'); ?>js/main.js"></script>

</body>

</html>