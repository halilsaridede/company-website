<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]>
      <meta http-equiv="x-ua-compatible" content="IE=9" />
      <![endif]-->
    <title>COMPANY WEBSITE</title>
    <link rel="canonical" href="" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <meta name="author" content="Codings">
    <meta name="description" content="" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="article:publisher" content="" />
    <meta property="article:modified_time" content="2022-10-15:00:00+00:00" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="1500" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:label1" content="Tahmini okuma süresi" />
    <meta name="twitter:data1" content="5 dakika" />

    <!-- ==============================================
         Favicons
         =============================================== -->
    <link rel="shortcut icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
    <!-- ==============================================
         Vendor Stylesheet
         =============================================== -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slider.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/vendor/icons.min.css">
    <link rel="stylesheet" href="assets/css/vendor/icons-fa.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="assets/css/vendor/gallery.min.css">
    <link rel="stylesheet" href="assets/css/vendor/cookie-notice.min.css">
    <!-- ==============================================
         Custom Stylesheet
         =============================================== -->
    <link rel="stylesheet" href="assets/css/default.css">
    <!-- ==============================================
         Theme Color
         =============================================== -->
    <meta name="theme-color" content="#21333e">
    <!-- ==============================================
         Theme Settings
         =============================================== -->
    <style>
        :root {
            --hero-bg-color: #080d10;
            --section-1-bg-color: #ffffff;
            --section-2-bg-color: #111117;
            --section-3-bg-color: #111117;
            --section-4-bg-color: #ffffff;
            --section-5-bg-color: #eef4ed;
            --section-6-bg-color: #111117;
            --section-7-bg-color: #ffffff;
            --footer-bg-color: #080d10;
        }
    </style>
</head>

<body class="home">
    <!-- Preloader -->
    <div id="preloader" data-timeout="2000" class="odd preloader counter">
        <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
            <div data-percent="100" class="radial">
                <span></span>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header id="header">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand top">
            <div class="container header">
                <!-- Navbar Items [left] -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Çalışma Saatleri : PZT
                            -
                            CUMA - 8:00 - 17:00</a>
                    </li>
                </ul>
                <!-- Nav holder -->
                <div class="ml-auto"></div>
                <!-- Navbar Items [right] -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i> Phone number</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i>info@company.com</a>
                    </li>
                </ul>
                <!-- Navbar Icons -->
                <ul class="navbar-nav icons">
                    <li class="nav-item social">
                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="#" class="nav-link pr-0"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>

                <li class="nav-item social pl-5" style="list-style: none">
                    <a href="/tr" target="_blank"><img src="assets/images/tr.png" width="32" height="32"></a>
                </li>
                <li class="nav-item social pl-2" style="list-style: none">
                    <a href="/en" target="_blank"><img src="assets/images/en.png" width="32" height="32"></a>
                </li>
            </div>
        </nav>
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-fixed sub">
            <div class="container header">
                <!-- Navbar Brand-->
                <a class="navbar-brand" href="/{{ $lang }}">
                    <img src="assets/images/logo.png" alt="COMPANY WEBSITE" width="125" height="225" style="width: 225px!important;height: 125px!important;">
                </a>
                <!-- Nav holder -->
                <div class="ml-auto"></div>
                <!-- Navbar Items -->
                <ul class="navbar-nav items">
                    <li class="nav-item social">
                        <a href="/tr" target="_blank"><img src="assets/images/tr.png" width="32" height="32"></a>
                        <a href="/en" target="_blank"><img src="assets/images/en.png" width="32" height="32"></a>
                    </li>
                    <li class="nav-item">
                        <a href="#header" class="smooth-anchor nav-link">ANASAYFA</a>
                    </li>
                    <li class="nav-item">
                        <a href="#video" class="smooth-anchor nav-link">HAKKINDA</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="smooth-anchor nav-link">FAALİYET KONULARI</a>
                    </li>
                    <li class="nav-item">
                        <a href="#team" class="smooth-anchor nav-link">ORGANİZASYON YAPISI</a>
                    </li>
                </ul>
                <!-- Navbar Toggle -->
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="icon-menu m-0"></i>
                        </a>
                    </li>
                </ul>
                <!-- Navbar Action -->
                <ul class="navbar-nav action">
                    <li class="nav-item ml-3">
                        <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button">BİZE ULAŞIN</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Hero -->
    <section id="slider" class="hero p-0 odd">
        <div class="swiper-container full-slider animation slider-h-100 slider-h-auto">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                <div class="swiper-slide slide-center">
                    <!-- Media -->
                    <img src="{{ $slider->path }}" alt="Full Image" class="full-image" data-mask="40">
                    <div class="slide-content row">
                        <div class="col-12 d-flex justify-content-start inner">
                            <div class="left text-left">
                                <!-- Content -->
                                <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                    {{ $slider->tr_title }}
                                </h1>
                                <p data-aos="zoom-in" data-aos-delay="2400" class="description">
                                    {{ $slider->tr_description }}
                                </p>
                                <!-- Action -->
                                <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                    <div class="d-sm-inline-flex">
                                        <a href="#contact" class="smooth-anchor mt-4 btn primary-button">BİZE
                                            ULAŞIN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Services -->
    <section id="services" class="section-3 odd offers">
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                    <h2>FAALİYET KONULARI</h2>
                </div>
            </div>
            <div id="arge" class="row justify-content-center items">
                <div class="col-6 col-md-4 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-flag"></i>
                        <h4>ARGE</h4>
                        <ul>
                            @foreach ($argeSections as $arge)
                            <li>{{ $arge->tr_text }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="proje" class="col-6 col-md-4 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-organization"></i>
                        <h4>Proje</h4>
                        <ul>
                            @foreach ($projectSections as $project)
                            <li>{{ $project->tr_text }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="egitim" class="col-6 col-md-4 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-briefcase"></i>
                        <h4>Eğitim</h4>
                        <ul>
                            @foreach ($educationSections as $education)
                            <li>{{ $education->tr_text }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="yonetim" class="col-6 col-md-4 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-plane"></i>
                        <h4>Yönetim</h4>
                        <ul>
                            @foreach ($managementSections as $management)
                            <li>{{ $management->tr_text }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="denetim" class="col-6 col-md-4 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-check"></i>
                        <h4>Denetim</h4>
                        <ul>
                            @foreach ($auditSections as $audit)
                            <li>{{ $audit->tr_text }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="organizasyon" class="col-6 col-md-4 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-globe-alt"></i>
                        <h4>Organizasyon</h4>
                        <ul>
                            @foreach ($organisationSections as $organisation)
                            <li>{{ $organisation->tr_text }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section id="team" class="section-4 highlights team image-right">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 align-self-top text-center text-md-left text">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2><span class="featured"><span>Ekip</span></span> üyelerimiz</h2>
                            <p>Etik ve dürüstlük, profesyonellerimizin kariyerlerini inşa ettikleri temellerdir.<br>Bunlar günlük tutumlar haline gelen temellerdir.</p>
                        </div>
                    </div>
                    <div class="row items text-left">
                        @foreach($teamMembers as $teamMember)
                        <div class="col-12 col-md-6 p-0">
                            <div class="row item">
                                <div class="col-4 p-0 pr-3 align-self-center">
                                    <img src="{{ $teamMember->path }}" alt="Person" class="person">
                                </div>
                                <div class="col-8 align-self-center text-left">
                                    <h4>{{ $teamMember->name_surname }}</h4>
                                    <p>{{ $teamMember->tr_task }}</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="{{ $teamMember->facebook }}" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ $teamMember->twitter }}" class="nav-link"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ $teamMember->linkedin }}" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div data-aos="zoom-in" class="col-12 col-lg-4 align-self-end">
                    <div class="quote">
                        <div class="quote-content">
                            <h4>YÖNETİM KURULU BAŞKANININ MESAJI</h4>
                            @if (!is_null($message))
                            {!! $message->tr_message !!}
                            <h5> {!! $message->name !!}</h5>
                            @endif
                        </div>
                        <i class="quote-right fas fa-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section id="contact" class="section-7 form contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">Mesaj Gönderin</span>
                            <h2>Bizimle iletişime <span class="featured"><span>geçin</span></span></h2>
                            <p>En kısa sürede size dönüş yapacağız.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-0">
                            <form method="POST" action="{{ route('post.home.contact') }}">
                                @csrf
                                <input type="hidden" name="section" value="nexgen_form">
                                <input type="hidden" name="reCAPTCHA">
                                <!-- Remove this field if you want to disable recaptcha -->
                                <div class="row form-group-margin">
                                    <div class="col-12 col-md-6 m-0 p-2 input-group">
                                        <input type="text" name="name_surname" class="form-control field-name" placeholder="İsminiz ve Soyisminiz">
                                    </div>
                                    <div class="col-12 col-md-6 m-0 p-2 input-group">
                                        <input type="email" name="email" class="form-control field-email" placeholder="E-posta adresiniz">
                                    </div>
                                    <div class="col-12 col-md-6 m-0 p-2 input-group">
                                        <input type="text" name="phone" class="form-control field-phone" placeholder="Telefon numaranız">
                                    </div>
                                    <div class="col-12 col-md-6 m-0 p-2 input-group">
                                        <i class="icon-arrow-down mr-3"></i>
                                        <select name="info" class="form-control field-info">
                                            <option value="" selected disabled>Konu Seçiniz</option>
                                            <option value="Proje">Proje</option>
                                            <option value="Eğitim">Eğitim</option>
                                            <option value="Yönetim">Yönetim</option>
                                            <option value="Denetim">Denetim</option>
                                            <option value="ARGE">ARGE</option>
                                            <option value="Organizasyon">Organizasyon</option>
                                            <option value="Diğer">Diğer</option>
                                        </select>
                                    </div>
                                    <div class="col-12 m-0 p-2 input-group">
                                        <textarea name="message" class="form-control field-message" placeholder="Mesajınız"></textarea>
                                    </div>
                                    <div class="col-12 col-12 m-0 p-2 input-group">
                                        <span class="form-alert"></span>
                                    </div>
                                    <div class="panel panel-default">

                                        @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong>Success !</strong> {{ session('success') }}
                                        </div>
                                        @endif

                                        @if (Session::has('error'))
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong>Error !</strong> {{ session('error') }}
                                        </div>
                                        @endif

                                        @error('name_surname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        @error('info')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-12 input-group m-0 p-2">
                                        <div class="float-right mt-3">
                                            <button type="submit" class="btn btn-primary">GÖNDER</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="contacts">
                        <h4>COMPANY WEBSITE</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                        Phone number<br>
                                    Fax : number
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-envelope mr-2"></i>
                                    info@company.com
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    ADDRESS INFO
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">HARİTADA GÖSTER</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <!-- Footer [content] -->
        <section id="footer" class="odd footer offers">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 footer-left">
                        <!-- Navbar Brand-->
                        <a class="navbar-brand" href="/{{ $lang }}">
                            <img src="assets/images/logo.png" alt="COMPANY WEBSITE" width="125" height="225" style="width: 225px!important;height: 125px!important;">
                        </a>
                        <p></p>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    Phone number
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-envelope mr-2"></i>
                                    info@company.com
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    ADDRESSS INFO
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-8 p-0 footer-right">
                        <div class="row items">
                            <div class="col-12 col-lg-6 item">
                                <div class="card">
                                    <h4>HİZMETLER</h4>
                                    <a href="#proje"><i class="icon-arrow-right"></i>Proje</a>
                                    <a href="#egitim"><i class="icon-arrow-right"></i>Eğitim</a>
                                    <a href="#yonetim"><i class="icon-arrow-right"></i>Yönetim</a>
                                    <a href="#denetim"><i class="icon-arrow-right"></i>Denetim</a>
                                    <a href="#arge"><i class="icon-arrow-right"></i>ARGE</a>
                                    <a href="#organizasyon"><i class="icon-arrow-right"></i>Organizasyon</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 item">
                                <div class="card">
                                    <h4>FAYDALI LİNKLER</h4>
                                    <a href="https://www.msb.gov.tr/" target="_blank"><i class="icon-arrow-right"></i>Milli Savunma Bakanlığı</a>
                                    <a href="https://www.icisleri.gov.tr/" target="_blank"><i class="icon-arrow-right"></i>İçişleri Bakanlığı</a>
                                    <a href="https://www.enerji.gov.tr/" target="_blank"><i class="icon-arrow-right"></i>Enerji ve Tabii Kaynaklar Bakanlığı</a>
                                    <a href="https://www.ormansu.gov.tr/" target="_blank"><i class="icon-arrow-right"></i>T.C. Orman ve Su İşleri Bakanlığı</a>
                                    <a href="https://www.ssm.gov.tr/" target="_blank"><i class="icon-arrow-right"></i>Savunma Sanayii Müsteşarlığı</a>
                                    <a href="https://www.saglik.gov.tr/" target="_blank"><i class="icon-arrow-right"></i>Sağlık Bakanlığı</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright -->
        <section id="copyright" class="p-3 odd copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                        <p>COMPANY WEBSITE</p>
                    </div>
                    <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                        <p>COPYRIGHT</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Modal [search] -->
    <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0">
                                    <h2>What are you looking for ?</h2>
                                    <div class="badges">
                                        <span class="badge"><a href="#">Consulting</a></span>
                                        <span class="badge"><a href="#">Audit</a></span>
                                        <span class="badge"><a href="#">Assurance</a></span>
                                        <span class="badge"><a href="#">Advisory</a></span>
                                        <span class="badge"><a href="#">Financial</a></span>
                                        <span class="badge"><a href="#">Capital Markets</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal [sign] -->
    <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body">
                    <form action="/" class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0 pb-3">
                                    <h2>Sign In</h2>
                                    <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">SIGN IN</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal [map] -->
    <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header absolute" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.3019678651144!2d32.77818011531629!3d39.91225807942689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d3489ea66214c9%3A0xb75255bf1b7977ff!2sNEP%20OFFICE!5e0!3m2!1str!2str!4v1665324142533!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal [responsive menu] -->
    <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                        <div class="contacts p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll [to top] -->
    <div id="scroll-to-top" class="scroll-to-top">
        <a href="#header" class="smooth-anchor">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>
    <!-- ==============================================
         Google reCAPTCHA // Put your site key here
         =============================================== -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>
    <!-- ==============================================
         Vendor Scripts
         =============================================== -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/jquery.easing.min.js"></script>
    <script src="assets/js/vendor/jquery.inview.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/ponyfill.min.js"></script>
    <script src="assets/js/vendor/slider.min.js"></script>
    <script src="assets/js/vendor/animation.min.js"></script>
    <script src="assets/js/vendor/progress-radial.min.js"></script>
    <script src="assets/js/vendor/bricklayer.min.js"></script>
    <script src="assets/js/vendor/gallery.min.js"></script>
    <script src="assets/js/vendor/shuffle.min.js"></script>
    <script src="assets/js/vendor/cookie-notice.min.js"></script>
    <script src="assets/js/vendor/particles.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        });
    </script>
</body>

</html>