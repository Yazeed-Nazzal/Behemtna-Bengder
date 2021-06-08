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
                <h1><a href="index.html"><img src="{{asset('imge/logo.png')}}" alt="logo" style="width:70px;height:70px;max-height:70px;" /></a></h1>

            </div>

            <nav id="navbar" class="navbar order-last order-lg-0 justify-content-center">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{route('contact-as.index')}}">Contact</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li><a class=" nav-link scrollto" href="{{ url('/home') }}">{{auth()->user()->name}}</a></li>
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

    <!-- ======= Start Slider ======= -->
    <div class="container-fluid ">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('imge/slider2.png')}}" class="d-block w-100" alt="slider2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('imge/slider3.png')}}" class="d-block w-100" alt="slider3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('imge/slider4.png')}}" class="d-block w-100" alt="slider4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('imge/slider5.png')}}" class="d-block w-100" alt="slider5">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- End Slider -->

    <main id="main">

        <!-- ======= What We Do Section ======= -->
        <section id="what-we-do" class="what-we-do">
            <div class="container">

                <div class="section-title">
                    <h2>Teams</h2>
                    <p>Our Teams</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-laptop-code" style="color: #d19c34;font-size:25px;"></i></div>
                            <h4><a href="">MEGA TEAM</a></h4>
                            <p>هو فريق يعمل في كلية تكنولوجيا المعلومات وكلية المال والاعمال ويقوم بخدمة الطلاب اكاديمياً والقيام بالانشطة الطلابية بالتنسيق م الدكاترة</p>
                            <img src="{{asset('imge/mega.png')}}" alt="imag3" style="width:180px;height:150px;margin-top:20px;" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-mosque" style="color: #d19c34;font-size:25px;"></i></div>
                            <h4><a href="">فريق منابر الفقه</a></h4>
                            <p>هو فريق يعمل في كلية المذاهب الاربعة ويقوم بخدمة الطلاب اكاديمياً والقيام بالانشطة الطلابية داخل كلية المذاهب الاربعة بالتنسيق مع الدكاترة</p>
                            <img src="{{asset('imge/manaber-logo.png')}}" alt="imag3" style="width:180px;height:150px;margin-top:20px;" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-gavel" style="color: #d19c34;font-size:25px;"></i></div>
                            <h4><a href="">فريق قانوني هماوي</a></h4>
                            <p>هو فريق يعمل في كلية القانون ويقوم بخدمة الطلاب اكاديمياً والقيام بالانشطة الطلابية داخل كلية القانون بالتنسيق مع الدكاترة</p>
                            <img src="{{asset('imge/law-logo.png')}}" alt="imag3" style="width:180px;height:150px;margin-top:20px;" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-hands" style="color: #d19c34;font-size:25px;"></i></div>
                            <h4><a href="">فريق وعد الهمة</a></h4>
                            <p>هو فريق يعمل في كلية الاداب والعلوم التروبية ويقوم بخدمة الطلاب اكاديمياً والقيام بالانشطة الطلابية داخل كلية الاداب والعلوم التربوية</p>
                            <img src="{{asset('imge/waed-logo.png')}}" alt="imag3" style="width:180px;height:150px;margin-top:20px;" />
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End What We Do Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5">
                    <img src="{{asset('imge/login.jpg')}}" alt="login" style="width:400px;height:250px" />
                    <div class="button-login-rigester">
                        <a href="{{ route('login') }}" class="btn" style="color:#fff;background-color:#d19c34;border-radius:10px;min-width:100px;box-shadow:none">login</a>
                        <a href="{{ route('register') }}" class="btn" style="color:#fff;background-color:#d19c34;border-radius:10px;min-width:100px;box-shadow:none">Register</a>
                    </div>
                </div>
            </div>
        </div>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    <img src="{{asset('imge/logo islamic.png')}}" alt="">
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://twitter.com/BeHmtna?s=09" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/BeHmtna/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/bhmtna_bnqdr?igshid=bfj7elosumfp" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href=" https://t.me/Be9mtna" class="linkedin"><i class="fab fa-telegram"></i></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
