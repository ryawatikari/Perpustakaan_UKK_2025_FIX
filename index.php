<?php 
    include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Perpustakaan MAK Negeri Ende</title>
    <meta name="description" content="A free bootstrap theme landing page for startups and SaaS app website by themesforapp">
    <meta name="keywords" content="tfa, themes for app, startup, saas, free bootstrap theme">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Facebook Open Graph -->
    <meta property="og:title" content="Akrai, free bootstrap theme for startup and saaS by Themes For App."/>
    <meta property="og:image" content="assets/images/akrai-preview.png"/>
    <meta property="og:site_name" content="Themes For App"/>
    <meta property="og:description" content="A free bootstrap theme landing page for startups and SaaS app website by themesforapp"/>

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://themesfor.app/themes/akrai">
    <meta name="twitter:title" content="Akrai, free bootstrap theme for startup and saaS by Themes For App.">
    <meta name="twitter:description" content="A free bootstrap theme landing page for startups and SaaS app website by themesforapp">
    <meta name="twitter:image" content="assets/images/akrai-preview.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!-- Button CSS -->
    <link rel="stylesheet" href="assets/css/button.css">

    <!-- Font CSS -->
    <link rel="stylesheet" href="assets/css/font.css">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/color.css">
</head>

<body id="home" data-spy="scroll" class="text-black font-weight__400">
    <!-- Header -->
    <header id="header" class="header">
        <!-- Header Inner -->
        <div class="header-outter">
            <div class="container">
                <nav class="navbar header-inner navbar-expand-md">
                    <div class="col-12 col-md-2 pl-md-0">
                        <!-- Logo -->
                        <div class="navbar-brand header-logo py-1 logo">
                            <a>
                                <h4>MakPustaka</h4>
                            </a>
                        </div>
                        <!--/ End Logo -->
                    </div>
                    <div class="col-12 col-md-10 pr-md-0">
                        <!-- Nav -->
                        <div class="header-nav">
                            <div class="header-nav__mobile d-md-none"></div>
                            <div class="header-nav__main collapse navbar-collapse justify-content-center">
                                <ul class="nav navbar-nav navAnimateBorder">
                                    <li class="nav-item active">
                                        <a class="nav-link font-weight__500 text-white" href="#home">Beranda<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight__500 text-white" href="#features">Fitur</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight__500 text-white" href="#team">Tim Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight__500 text-white" href="#testimonial">Testimoni</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight__500 text-white" href="#contact">Kontak Kami</a>
                                    </li>
                                </ul>
                                <!-- <a class="btn btn-shadow btn-rounded btn-primary base-plus-font-size my-0 btn-md" href="login.php" role="button">Masuk</a> -->
                               
                            </div>
                        </div>
                        <!--/ End Nav -->
                    </div>
                </nav>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->
    <!-- Hero -->
    <section id="hero" class="hero hero-top bg-light section-image overlay section h-100">
        <div class="container h-100">
            <div class="row justify-content-center justify-content-md-start h-100 align-items-center">
                <div class="col-12 col-md-8 align-self-center">
                    <div class="hero-content">
                        <h1 class="xxxl-font-size font-weight__700">Selamat datang di Perpustakaan Digital MAK Negeri Ende!</h1>
                        <p class="lead mt-2">Temukan berbagai koleksi buku, jurnal, dan referensi pendidikan dengan mudah dan cepat.</p>
                        <a class="btn btn-rounded btn-outline-white base-plus-font-size my-4 btn-md mr-lg-3" href="login.php" role="button">Masuk ke Perpustakaan</a>
                        <a class="btn btn-shadow btn-rounded btn-primary base-plus-font-size my-4 btn-md" href="#" role="button">Jelajahi Koleksi</a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute-bottom curve-bottom" viewBox="0 0 1440 68" enable-background="new 0 0 1440 68">
            <path d="m1622.3 1937.7c0 0-410.7 169.1-913.4 75.5-502.7-93.6-977.7 56.3-977.7 56.3v440h1891.1v-571.8" transform="translate(0-1977)" fill="#ffffff"></path>
        </svg>
    </section>
    <!--/ End Hero -->
    <!-- About -->
    <!--/ End About -->
    <!-- Features -->
    <section id="features" class="features bg-light section" data-spy="scroll">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto text-center">
                    <div class="section-title">
                        <h2 class="text-uppercase mb-3 font-weight__700">Fitur Unggulan <span>Perpustakaan Digital:</span></h2>
                    </div>
                    <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elit sem, dignissim vitae arcu ac, ullamcorper tincidunt purus.</p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Feature -->
                    <div class="single-feature box-shadow card h-100">
                        <div class="card-body text-center">
                            <div class="single-feature__icon icon-rings bg-primary text-white lg-font-size">
                                <i class="fa fa-adjust align-middle"></i>
                            </div>
                            <h3 class="single-feature__title card-title">Akses ke Ribuan Buku Digital</h3>
                            <p>Nikmati koleksi buku digital yang luas dengan berbagai genre yang dapat diakses kapan saja dan di mana saja.</p>
                        </div>
                    </div>
                    <!--/ End Feature -->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Feature -->
                    <div class="single-feature box-shadow card h-100">
                        <div class="card-body text-center">
                            <div class="single-feature__icon icon-rings bg-primary text-white lg-font-size">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <h3 class="single-feature__title card-title">Pencarian Cepat Berdasarkan Kategori</h3>
                            <p>Temukan buku yang Anda cari dengan mudah menggunakan fitur pencarian cepat berdasarkan kategori yang tersedia.</p>
                        </div>
                    </div>
                    <!--/ End Feature -->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Feature -->
                    <div class="single-feature box-shadow card h-100">
                        <div class="card-body text-center">
                            <div class="single-feature__icon icon-rings bg-primary text-white lg-font-size">
                                <i class="fa fa-edit align-middle"></i>
                            </div>
                            <h3 class="single-feature__title card-title">Peminjaman & Pengembalian Otomatis</h3>
                            <p>Proses peminjaman dan pengembalian buku dilakukan secara otomatis tanpa repot, memastikan pengalaman yang praktis.</p>
                        </div>
                    </div>
                    <!--/ End Feature -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-2">
                    <!-- Feature -->
                    <div class="single-feature box-shadow card h-100">
                        <div class="card-body text-center">
                            <div class="single-feature__icon icon-rings bg-primary text-white lg-font-size">
                                <i class="fa fa-plus align-middle"></i>
                            </div>
                            <h3 class="single-feature__title card-title">Rekomendasi Bacaan Berdasarkan Minat</h3>
                            <p>Dapatkan rekomendasi bacaan yang disesuaikan dengan minat dan preferensi Anda, membantu Anda menemukan buku yang menarik.</p>
                        </div>
                    </div>
                    <!--/ End Feature -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-2">
                    <!-- Feature -->
                    <div class="single-feature box-shadow card h-100">
                        <div class="card-body text-center">
                            <div class="single-feature__icon icon-rings bg-primary text-white lg-font-size">
                                <i class="fa fa-plus align-middle"></i>
                            </div>
                            <h3 class="single-feature__title card-title">Peringatan Peminjaman & Pengembalian</h3>
                            <p>Dapatkan notifikasi untuk mengingatkan Anda tentang tanggal jatuh tempo peminjaman dan pengembalian buku.</p>
                        </div>
                    </div>
                    <!--/ End Feature -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-2">
                    <!-- Feature -->
                    <div class="single-feature box-shadow card h-100">
                        <div class="card-body text-center">
                            <div class="single-feature__icon icon-rings bg-primary text-white lg-font-size">
                                <i class="fa fa-plus align-middle"></i>
                            </div>
                            <h3 class="single-feature__title card-title">Akses Melalui Semua Perangkat</h3>
                            <p>Nikmati pengalaman membaca yang seamless melalui perangkat apa pun, baik itu komputer, tablet, atau ponsel.</p>
                        </div>
                    </div>
                    <!--/ End Feature -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Features -->
 
    <!-- Video Intro -->
    <section id="video-intro" class="video-intro section section-image overlay" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h2 class="text-uppercase mb-3 pb-0 font-weight__700">Jelajahi Keseruan Belajar di Sekolah Kami</h2>
                    </div>
                    <p class="lead">Rasakan pengalaman belajar yang seru, inspiratif, dan penuh kebersamaan di sekolah kami!</p>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a class="btn btn-md btn-outline-white base-font-size btn-rounded btn-play btn__wobble popup-video mfp-iframe" href="https://www.youtube.com/watch?v=76j0wGH3RUE&t=171s">
                            <i class="fa fa-play"></i> play video
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Video Intro -->
    <!-- Team -->
    <section id="team" class="team section" data-spy="scroll">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto text-center">
                    <div class="section-title">
                        <h2 class="text-uppercase mb-3 font-weight__700">Tim <span>Kami</span></h2>
                    </div>
                    <p class="lead">Kami adalah tim yang berdedikasi untuk menciptakan lingkungan belajar yang inspiratif, inovatif, dan penuh semangat demi masa depan yang lebih baik. </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8 col-sm-6 col-lg-3">
                    <!-- Single Teammate -->
                    <div class="single-team mt-4">
                        <div class="card overlayAnimate border-0">
                            <img class="card-img-top single-team__img overlayAnimate__img" src="assets/images/team/marlin.png" alt="#">
                            <ul class="nav single-team__social bg-white">
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="card-img-overlay single-team__text overlayAnimate__text text-center">
                                <h4>Emily Bratkovich</h4>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Teammate -->
                </div>
                <div class="col-8 col-sm-6 col-lg-3">
                    <!-- Single Teammate -->
                    <div class="single-team mt-4">
                        <div class="card overlayAnimate border-0">
                            <img class="card-img-top single-team__img overlayAnimate__img" src="assets/images/team/marlin.png" alt="#">
                            <ul class="nav single-team__social bg-white">
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="card-img-overlay single-team__text overlayAnimate__text text-center">
                                <h4>Jenny Rodriguez</h4>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Teammate -->
                </div>
                <div class="col-8 col-sm-6 col-lg-3">
                    <!-- Single Teammate -->
                    <div class="single-team mt-4">
                        <div class="card overlayAnimate border-0">
                            <img class="card-img-top single-team__img overlayAnimate__img" src="assets/images/team/marlin.png" alt="#">
                            <ul class="nav single-team__social bg-white">
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="card-img-overlay single-team__text overlayAnimate__text text-center">
                                <h4>Keri Yamnik</h4>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Teammate -->
                </div>
                <div class="col-8 col-sm-6 col-lg-3">
                    <!-- Single Teammate -->
                    <div class="single-team mt-4">
                        <div class="card overlayAnimate border-0">
                            <img class="card-img-top overlayAnimate__img" src="assets/images/team/marlin.png" alt="#">
                            <ul class="nav single-team__social bg-white">
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="nav-item"><a class="nav-link text-white bg-primary xs-font-size" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="card-img-overlay single-team__text overlayAnimate__text text-center">
                                <h4>Clare McCabe</h4>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Teammate -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team -->
    <!-- Testimonial -->
    <section id="testimonial" class="testimonial section section-image overlay" data-spy="scroll">
        <div class="container">
            <div class="row">
                <div class="testimonial-active col-12 col-sm-8 text-center m-auto">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <h2 class="single-testimonial__name mb-2">Emily Bratkovich</h2>
                        <p class="single-testimonial__comment">Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Thanks!!</p>
                        <p class="single-testimonial__rating text-center">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star-half"></i></span>
                        </p>
                        <h5 class="single-testimonial__site">
								<a href="#" class="font-weight__300">Google</a>
							</h5>
                    </div>
                    <!--/ End Single Testimonial -->
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <h2 class="single-testimonial__name mb-2">Clare McCabe</h2>
                        <p class="single-testimonial__comment">Ponsectetur adipisicing elit, sed do eiusmod tempor exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Very Helpfull!</p>
                        <p class="single-testimonial__rating text-center">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </p>
                        <h5 class="single-testimonial__site">
								<a href="#" class="font-weight__300">Facebook</a>
							</h5>
                    </div>
                    <!--/ End Single Testimonial -->
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <h2 class="single-testimonial__name mb-2">Keri Yamnik</h2>
                        <p class="single-testimonial__comment">Gpsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 5 star!</p>
                        <p class="single-testimonial__rating text-center">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </p>
                        <h5 class="single-testimonial__site">
								<a href="#" class="font-weight__300">Twitter</a>
							</h5>
                    </div>
                    <!--/ End Single Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Testimonial -->
    <!-- Stats -->
    <section id="stats" class="stats section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <!-- Single Count -->
                    <div class="single-stat text-center">
                        <div class="single-stat__icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <h2 class="single-stat__counter counter">2000</h2>
                        <p>Projects Finished</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-12 col-sm-3">
                    <!-- Single Count -->
                    <div class="single-stat text-center">
                        <div class="single-stat__icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <h2 class="single-stat__counter counter">449</h2>
                        <p>Happy Clients</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-12 col-sm-3">
                    <!-- Single Count -->
                    <div class="single-stat text-center">
                        <div class="single-stat__icon">
                            <i class="fa fa-pencil-square"></i>
                        </div>
                        <h2 class="single-stat__counter counter">8640</h2>
                        <p>Hours Worked</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-12 col-sm-3">
                    <!-- Single Count -->
                    <div class="single-stat text-center">
                        <div class="single-stat__icon">
                            <i class="fa fa-coffee"></i>
                        </div>
                        <h2 class="single-stat__counter counter">43500</h2>
                        <p>Cups of Coffee</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Stats -->
    <!-- Contact -->
    <section id="contact" class="contact section section-image" data-spy="scroll">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Contact Form -->
                    <div class="section-title">
                        <h2 class="contact-form__title">Ask a Question</h2>
                    </div>
                    <form>
                        <div class="form-group row">
                            <input class="col form-control form-control-lg" type="text" name="name" placeholder="Your Name">
                            <input class="col form-control form-control-lg ml-2" type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group row">
                            <textarea class="col form-control form-control-lg" required name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-shadow btn-md btn-outline-primary base-font-size">Submit</button>
                        </div>
                    </form>
                    <!--/ End Contact Form -->
                </div>
                <div class="col-12 col-md-6 col-lg-4 ml-lg-auto">
                    <!-- Contact Address -->
                    <div class="section-title">
                        <h2 class="contact-address__title">Kontak Kami</h2>
                    </div>
                    <div class="contact-address__info">
                        <div class="contact-address__info1 mb-3">
                            <h6 class="text-uppercase">Alamat</h6>
                            <span>Jl. Raya Ende-Bajawa Km 21 Nangapanda</span>
                        </div>
                        <div class="contact-address__info2 mb-3">
                            <h6 class="text-uppercase">Telephone</h6>
                            <span>081236702442</span>
                        </div>
                        <div class="contact-address__info3 mb-3">
                            <h6 class="text-uppercase">Email</h6>
                            <span><a href="mailto:qdonow@gmail.com">maknende@gmail.com</a></span>
                        </div>
                    </div>
                    <!--/ End Contact Address -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact -->
    <!-- Brand -->
    <section id="brand" class="brand">
        <div class="container">
            <div class="row">
                <h2 class="sr-only">Brand</h2>
                <div class="brand-slider">
                    <!-- Single Brand -->
                    <div class="single-brand">
                        <img src="assets/images/brand/client1.jpg" alt="brand">
                    </div>
                    <!--/ End Single Brand -->
                    <!-- Single Brand -->
                    <div class="single-brand">
                        <img src="assets/images/brand/client3.jpg" alt="brand">
                    </div>
                    <!--/ End Single Brand -->
                    <!-- Single Brand -->
                    <div class="single-brand">
                        <img src="assets/images/brand/client4.jpg" alt="brand">
                    </div>
                    <!--/ End Single Brand -->
                    <!-- Single Brand -->
                    <div class="single-brand">
                        <img src="assets/images/brand/client5.jpg" alt="brand">
                    </div>
                    <!--/ End Single Brand -->
                    <!-- Single Brand -->
                    <div class="single-brand">
                        <img src="assets/images/brand/client6.jpg" alt="brand">
                    </div>
                    <!--/ End Single Brand -->
                    <!-- Single Brand -->
                    <div class="single-brand">
                        <img src="assets/images/brand/client1.jpg" alt="brand">
                    </div>
                    <!--/ End Single Brand -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Brand -->
    <!-- Footer -->
    <footer id="footer" class="footer bg-color bg-dark">
        <!-- Footer Main -->
        <div class="footer-main py-4">
            <div class="container">
                <div class="row text-white">
                    <div class="col-12 col-lg-2">
                        <!-- Footer Logo -->
                        <div class="footer-main__logo logo text-center text-lg-left">
                            <img src="assets/images/logo-white.svg" alt="logo">
                        </div>
                        <!--/ End Footer Logo -->
                    </div>
                    <div class="col-12 col-sm-8 col-lg-6 align-self-lg-center">
                        <!-- Footer Menu -->
                        <div class="footer-main__menu">
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white">Terms</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white">Privacy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white">Security</a>
                                </li>
                            </ul>
                        </div>
                        <!--/ End Footer Menu -->
                    </div>
                    <div class="col-12 col-sm-4 col-md-4">
                        <!-- Footer Social -->
                        <div class="footer-main__social">
                            <ul class="nav justify-content-center justify-content-md-end">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/ End Footer Menu -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Main -->
        <!-- Footer Description -->
        <div class="footer-description py-5">
            <div class="container">
                <div class="row text-white">
                    <div class="col-12 col-md-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Copyright -->
                        <div class="text-md-right">
                            &copy; 2025.<br>
                            <span>Ryawati Kari</span> <a href="https://themesfor.app" class="text-white">Themes For App</a> | <span>Images From</span> <a href="http://unsplash.com" class="text-white">Unsplash</a>.
                        </div>
                        <!--/ End Copyright -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Description -->
    </footer>
    <!--/ End Footer -->

    <!-- PreLoader -->
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-cube"></div>
            <div class="loader-cube"></div>
            <div class="loader-cube"></div>
            <div class="loader-cube"></div>
        </div>
    </div>
    <!--/ End PreLoader -->

    <!-- jQuery JS -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>

    <!-- jQuery Easing JS -->
    <script type="text/javascript" src="assets/js/jquery.easing.js"></script>

    <!-- Popper JS -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <!-- Modernizr JS -->
    <script type="text/javascript" src="assets/js/modernizr.min.js"></script>

    <!-- Isotope & Masonry JS -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>

    <!-- Appear JS -->
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>

    <!-- Scroll Up JS -->
    <script type="text/javascript" src="assets/js/jquery.scrollUp.min.js"></script>

    <!-- Wow JS -->
    <script type="text/javascript" src="assets/js/wow.min.js"></script>

    <!-- Slick Nav JS -->
    <script type="text/javascript" src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Onepage Nav JS -->
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>

    <!-- Popup JS -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>

    <!-- Steller JS -->
    <script type="text/javascript" src="assets/js/jquery.stellar.js"></script>

    <!-- Counterup JS -->
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>

    <!-- Slider & Owl Carousel JS -->
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

    <!-- Main JS -->
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>

</html>