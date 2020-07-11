<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Blog CMS by Abd. Asis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/frontend/assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend/assets/css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/materialdesignicons.min.css" />

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/style.css" />

    </head>

    <body>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="{{ url('/') }}">
                    <img src="{{ url('/') }}/frontend/assets/images/logo-dark.png" alt="" class="logo-light" height="20" />
                    <img src="{{ url('/') }}/frontend/assets/images/logo-dark.png" alt="" class="logo-dark" height="20" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto" id="mySidenav">
                        <li class="nav-item active">
                            <b><a href="{{ url('/') }}" class="nav-link">Beranda</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="" class="nav-link">Populer</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="" class="nav-link">Trending</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="#pricing" class="nav-link">Terbaru</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="" class="nav-link"> <i class="fa fa-user-circle"></i>Luar Negeri</a></b>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')

        <!-- Navbar End -->


        <!-- footer start -->
        <footer class="bg-dark footer">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-lg-4">
                        <div class="pr-lg-4">
                            <div class="mb-4">
                                <img src="images/logo-light.png" alt="" height="20">
                            </div>
                            <p class="text-white-50">A Responsive Bootstrap 4 Web App Kit</p>
                            <p class="text-white-50">Ubold is a fully featured premium admin template built on top of awesome Bootstrap 4.1.3, modern web technology HTML5, CSS3 and jQuery.</p>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">About</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Home</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Features</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Faq</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Clients</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Social</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Facebook </a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Twitter</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Behance</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Dribble</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Support</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Help & Support</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">More Info</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Pricing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>For Marketing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>For Agencies</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Our Apps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left pull-none">
                            <p class="text-white-50">2015 - 2020 © Ubold. Design by <a href="https://coderthemes.com/" target="_blank" class="text-white-50">Coderthemes</a> </p>
                        </div>
                        <div class="float-right pull-none">
                            <ul class="list-inline social-links">
                                <li class="list-inline-item text-white-50">
                                    Social :
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </footer>
        <!-- footer end -->

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{ url('/') }}/frontend/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/jquery.easing.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/scrollspy.min.js"></script>

        @yield('js')
        <!-- custom js -->
        <script src="{{ url('/') }}/frontend/assets/js/app.js"></script>
    </body>

</html>
