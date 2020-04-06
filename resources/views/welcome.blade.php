<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>GAE Web Design</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">
        <meta name="author" content="David Deutsch">
        <link href="{{ asset('/assets/img/logo.png') }}" rel="icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('/assets/vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/assets/vendor/fontawesome/css/all.min.css') }}">

        <!-- GAE Style CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    </head>
    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
            <div class="container">
                <a class="navbar-brand logo js-scroll-trigger" href="#page-top">
                    <img src="{{ asset('/assets/img/logo.png') }}" alt="PT. Garuda Angkasa Ekspres" class="img-fluid">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#mainNav">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#getquote">Get a Quote</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#fleets">Our Fleets</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Cover -->
        <header id="cover" class="d-flex align-items-center text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="font-weight-bold">Welcome To</h3>
                        <h2 class="font-weight-bolder">PT. GARUDA ANGKASA EKSPRESS</h2>
                        <hr />
                        <p class="lead">
                            Penyedia Jasa Pengangkutan dengan Profesionalisme kerja serta Komitman atas setiap pelayanan yang diberikan
                        </p>
                        <a class="btn btn-outline-primary js-scroll-trigger" href="#about">Learn More</a>
                        <a class="btn btn-outline-primary js-scroll-trigger" href="#getquote">Get Quote</a>
                    </div>
                </div>
            </div>
        </header>

        <main role="main" id="main">
            <!-- About Us -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">About Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <p class="text-muted">
                            <b>PT. Garuda Angkasa Ekspres</b> adalah perusahaan yang bergerak di bidang Jasa Pengangkutan yang didirikan pada bulan Oktober 2011 oleh praktisi yang berpengalaman dibidangnya masing - masing.
                        </p>
                        <p class="text-muted">
                            Dengan Profesionalisme kerja serta komitmen atas setiap pelayanannnya, kami percaya mampu memberikan jasa yang berkualitas konsisten dan memiliki nilai tambah demi tercapainya tujuan bersama.
                        </p>
                        <p class="text-muted">
                            Didukung oleh tim dan supir yang memiliki profesionalisme dan kompetensi tinggi, <b>PT. Garuda Angkasa Ekspres</b> memberikan berbagai jasa pengangkutan atas dasar prinsip ke mitraan, dimana kepuasan mitra adalah segalanya tanpa menghiraukan tujuan utama dari kegiatan usaha itu sendiri.
                        </p>
                    </div>
                </div>
            </section>
            
            <!-- Visi Misi -->
            <section id="visimisi">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">Vision</h2>
                        </div>
                    </div>
                    <div class="row">
                        <p class="text-white">
                            Visi kami adalah menjadi perusahaan pengangkutan yang terdepan dalam memberikan jasa yang terbaik sehingga barang setiap mitra kami bisa sampai tujuan dengan selamat, tepat waktu dan menjadi pilihan utama pelanggan.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Mission</h2>
                        </div>
                    </div>
                    <div class="row">
                        <p class="text-white">
                            Misi kami adalah memberikan jasa pengangkutan terbaik dengan nilai tambah kepada setiap mitra yang menjalin kerja sama dengan kami
                        </p>
                    </div>
                </div>
            </section>

            <!-- Our Client -->
            <section id="our-client">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">Our Client</h2>
                        </div>
                    </div>
                    <div class="row d-flex flex-row align-items-center">
                        <div class="carousel-client owl-carousel owl-theme" id="owl-client">
                            <div class="item">
                              <div class="animated">
                                <img src="{{ asset('/assets/img/client/chevron.jpg') }}" alt="Chevron" class="client-image">
                              </div>
                            </div>
                            <div class="item">
                              <div class="animated">
                                <img src="{{ asset('/assets/img/client/golgon.jpg') }}" alt="Golgon" class="client-image">
                              </div>
                            </div>
                            <div class="item">
                              <div class="animated">
                                <img src="{{ asset('/assets/img/client/growth_steel.jpg') }}" alt="Growth Steel" class="client-image">
                              </div>
                            </div>
                            <div class="item">
                              <div class="animated">
                                <img src="{{ asset('/assets/img/client/Indonesia_Fibreboard.jpg') }}" alt="Indonesia Fibreboard" class="client-image">
                              </div>
                            </div>
                            <div class="item">
                              <div class="animated">
                                <img src="{{ asset('/assets/img/client/Putra_baja_deli.jpg') }}" alt="Putra Baja Deli" class="client-image">
                              </div>
                            </div>
                            <div class="item">
                              <div class="animated">
                                <img src="{{ asset('/assets/img/client/Wika_Beton.jpg') }}" alt="Wika Beton" class="client-image">
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get Quote -->
            <section id="getquote">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-7 col-lg-6">
                    {!! Form::open(['url' => route('send.postQuotation'), 'class' => 'contact-form', 'method' => 'post', 'id' => 'contact_form','files' => true ]) !!}
                      <div class="text-center">
                        <h2 class="section-heading text-uppercase">
                          Get Quotation
                        </h2>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            {!! Form::label('Full Name*') !!}
                            {!! Form::text('fullname', null, ['class' => 'form-control','placeholder' => '', 'data-rule' => 'required', 'data-msg' => 'Please input your full name']); !!}
                            <div class="validate"></div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            {!! Form::label('Contact Number*') !!}
                            {!! Form::text('contact', null, ['class' => 'form-control','placeholder' => '', 'data-rule' => 'minlen:12', 'data-msg' => 'Please enter at least 12 number', 'data-inputmask' => "'mask': '+62 999-9999-9999'"]); !!}
                            <div class="validate"></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('E-Mail Address*') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'mail@example.com', 'data-rule' => 'email', 'data-msg' => 'Please input valid email']); !!}
                        <div class="validate"></div>
                      </div>
                      {{-- <div class="form-group">
                        {!! Form::label('Subject*') !!}
                        {!! Form::text('subject', null, ['class' => 'form-control','placeholder' => '', 'data-rule' => 'required', 'data-msg' => 'Please input Subject']); !!}
                        <div class="validate"></div>
                      </div> --}}
                      {{-- <div class="row">
                        <div class="col">
                          <div class="form-group">
                            {!! Form::label('Location*') !!}
                            {!! Form::text('location', null, ['class' => 'form-control','placeholder' => '', 'data-rule' => 'required', 'data-msg' => 'Please input valid location']); !!}
                            <div class="validate"></div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            {!! Form::label('Destination*') !!}
                            {!! Form::text('destination', null, ['class' => 'form-control','placeholder' => '', 'data-rule' => 'required', 'data-msg' => 'Please input valid destination']); !!}
                            <div class="validate"></div>
                          </div>
                        </div>
                      </div> --}}
                      <div class="form-group">
                        <div class="form-group">
                          {!! Form::label('Message*') !!}
                          {!! Form::textarea('keterangan', null, ['class' => 'form-control','placeholder' => '', 'data-rule' => "required", 'data-msg' => "Please write something for us"]); !!}
                          <div class="validate"></div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        @if (session('status'))
                          {{-- <input type="hidden" id="status_span" data-status="{{ session('status.success') }}" data-msg="{{ session('status.msg') }}"> --}}
                          <div class="{{ session('status.class') }}">{{ session('status.msg') }}</div>
                        @endif
                        {{-- <div class="error-message"></div>
                        <div class="sent-message">{{ session('status.msg') }}</div> --}}
                      </div>
                      <div class="text-center">
                        <button type="submit">Request A Quote</button>
                      </div>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </section>
            
            <!-- Our Fleets -->
            <section id="fleets">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Our Fleets</h2>
                        </div>
                    </div>
                    <div id="fleet-carousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{ asset('/assets/img/truck/dump-truck.png') }}" class="d-block w-100" alt="Fuso Trailer 10 Piston" />
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/assets/img/truck/fuso-trailer-8-piston.png') }}" class="d-block w-100" alt="Fuso Trailer 8 Piston" />
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/assets/img/truck/fuso-trailer-10-piston.png') }}" class="d-block w-100" alt="Fuso Trailer 10 Piston" />
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/assets/img/truck/Gandengan-12m.png') }}" class="d-block w-100" alt="img3" />
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/assets/img/truck/gandengan-14-m.png') }}" class="d-block w-100" alt="img3" />
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/assets/img/truck/gandengan-lowboy-9m.png') }}" class="d-block w-100" alt="Fuso Trailer 10 Piston" />
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/assets/img/truck/gandengan-lowboy-12m.png') }}" class="d-block w-100" alt="img3" />
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('/assets/img/truck/Hino-Trailer.png') }}" class="d-block w-100" alt="Fuso Trailer 10 Piston" />
                        </div>
                      </div>
                      <a class="carousel-nav-icon-prev" href="#fleet-carousel" role="button" data-slide="prev">
                        <span class="fas fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-nav-icon-next" href="#fleet-carousel" role="button" data-slide="next">
                        <span class="fas fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </section>
            
            <!-- Contact -->
            <section id="contact" class="pl-2">
                <div class="container">
                    <div class="row justify-content-center text-white">
                        <div class="col-xs-12 col-md-6">
                            <div class="row">
                                <h4><b><u>PT. Garuda Angkasa Ekspres</u></b></h4>
                            </div>
                            <div class="row">
                                <div class="" style="width: 12px;">
                                    <span class="fas fa-map-marker-alt mr-2"></span>
                                </div>
                                <div class="col">
                                    <label>Jl. Yos Sudarso Km. 19 No. 999 - Labuhan Medan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 12px;">
                                    <span class="fas fa-phone"></span>
                                </div>
                                <div class="col">
                                    <label>(061) 694 3988, (061) 694 3987</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 12px;">
                                    <span class="fas fa-mobile-alt"></span>
                                </div>
                                <div class="col">
                                    <label>+62 853 7224 9132, +62 852 7003 9191</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 12px;">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="col">
                                    <label>garuda_angkasa_ekspres@yahoo.com</label>
                                    <label>pt.garuda_angkasa_ekspres@yahoo.com</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 12px;">
                                    <span class="fa fa-fax"></span>
                                </div>
                                <div class="col">
                                    <label>(061) 694 1766, (061) 694 2079</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="row">
                                <h4><b>Our Location</b></h4>
                            </div>
                            <div class="row">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3898.2291999492813!2d98.67312760972159!3d3.7488107262298134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf0847ea705339c!2sPT.GARUDA%20ANGKASA%20EKSPRES!5e0!3m2!1sen!2sid!4v1585729968801!5m2!1sen!2sid" width="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer id="footer" class="d-flex align-items-center">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <p class="text-white">&copy; 2020. PT. Garuda Angkasa Ekspres. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

        <a href="#page-top" class="back-to-top justify-content-center"><i class="fas fa-chevron-up"></i></a>
        <!-- jQuery -->
        <script src="{{ asset('/assets/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <!-- Input Mask -->
        <script src="{{ asset('/assets/vendor/input-mask/inputmask.js') }}"></script>
        <script src="{{ asset('/assets/vendor/input-mask/bindings/inputmask.binding.js') }}"></script>

        <!-- Validate -->
        <script src="{{ asset('/assets/vendor/contact-form/validate.js') }}"></script>

        <!-- Popper -->
        <script src="{{ asset('/assets/vendor/popper/popper.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script src="{{ asset('/assets/vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

        <!-- Own JS -->
        <script src="{{ asset('/assets/js/gae.js') }}"></script>
    </body>
</html>
