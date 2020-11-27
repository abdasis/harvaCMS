<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title') | Arah Indonesia</title>
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
        @include('frontend.includes.navbar')

        @yield('content')

        <!-- Navbar End -->


        <!-- footer start -->
        @include('frontend.includes.footer')
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
