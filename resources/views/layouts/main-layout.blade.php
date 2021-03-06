<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Behmate</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet" /> <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="/"><img src="{{asset('imge/logo.png')}}" alt="logo" style="width:70px;height:70px;max-height:70px;" /></a></h1>

            </div>

            <nav id="navbar" class="navbar order-last order-lg-0 justify-content-center">
                <ul>
                    <li><a class="nav-link scrollto active" href="/home">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{route('contact-as.index')}}">Contact</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li><a class="nav-link scrollto" href="{{ url('/home') }}">{{auth()->user()->name}}</a></li>
                    @else
                    <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                    <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="https://twitter.com/BeHmtna?s=09" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/BeHmtna/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/bhmtna_bnqdr?igshid=bfj7elosumfp" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href=" https://t.me/Be9mtna" class="linkedin"><i class="fab fa-telegram"></i></i></a>
            </div>

        </div>
    </header><!-- End Header -->

    @include('sweetalert::alert')


    <div id="app">
        @yield('content')

    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>




</body>

</html>
