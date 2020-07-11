<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Starter | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/backend/assets/images/favicon.ico">

        @yield('css')
		<!-- App css -->
		<link href="{{ url('/') }}/backend/assets/css/bootstrap-modern.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{ url('/') }}/backend/assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{ url('/') }}/backend/assets/css/bootstrap-modern-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{ url('/') }}/backend/assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{ url('/') }}/backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout-mode="detached" data-layout='{"topbar": {"color": "light"}, "sidebar": {"showuser": "true"}}'></body>
    <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('backend.includes.topbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.includes.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('page-title')

                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme Modified <a href="https://abdasis.my.id">Abd. Asis</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Vendor js -->
        <script src="{{ url('/') }}/backend/assets/js/vendor.min.js"></script>

        @yield('js')
        <!-- App js -->
        <script src="{{ url('/') }}/backend/assets/js/app.min.js"></script>

    </body>
</html>
