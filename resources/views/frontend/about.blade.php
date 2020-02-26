
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agen Rumah</title>
    <link rel="icon" href="{{ asset('home_icon_ULE_icon.ico') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="{{asset('assets/frontend/img/logo1.png')}}" alt="">
                        </a>
                    </div>

                    @include('layouts.nav')

                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg about-us" data-setbg="{{asset('assets/frontend/img/bg.jpg')}}">
        <div class="container hero-text text-white">
            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Tentang Kami</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- About Us Sectiion Begin -->
    <section class="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 about-text-warp">
                    <div class="about-text">
                        <h2>Welcome to homes. The place where you can find your dream.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo aliquam lacus
                            ultrices, a feugiat urna blandit. Vivamus consequat purus eu risus tempor, sit amet rutrum
                            justo aliquet. Donec nec orci non eros aliquet blandit eu sed magna. Cras semper lacus
                            tempus nisl pretium, eu pretium dolor sollicitu-din. Nunc porttitor, libero a efficitur
                            interdum, ex mi ornare quam, at tempor tortor dui ac mi. Donec blandit sit amet est non
                            condimentum.</p>
                        <a href="#" class="site-btn a-btn">View our Listings</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-img">
                        <img src="{{asset('assets/frontend/img/about-img/1.jpg')}}" alt="">
                        <img class="l-img" src="{{asset('assets/frontend/img/about-img/2.jpg')}}" alt="">
                        <img class="r-img" src="{{asset('assets/frontend/img/about-img/3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Sectiion End -->
    <!-- Team Sectiion Begin -->
    <section class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title">
                        <h2><span>Meet out team</span><br />They are the best in the branch</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="single-team">
                        <div class="membr-pic">
                            <img src="{{asset('assets/frontend/img/about-img/membr-1.jpg')}}" alt="">
                        </div>
                        <div class="membr-info">
                            <h2>Maria Smith</h2>
                            <p>Realtor</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-team">
                        <div class="membr-pic">
                            <img src="{{asset('assets/frontend/img/about-img/membr-2.jpg')}}" alt="">
                        </div>
                        <div class="membr-info">
                            <h2>Maria Smith</h2>
                            <p>Realtor</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-team">
                        <div class="membr-pic">
                            <img src="{{asset('assets/frontend/img/about-img/membr-3.jpg')}}" alt="">
                        </div>
                        <div class="membr-info">
                            <h2>Maria Smith</h2>
                            <p>Realtor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Sectiion End -->
    <!-- Count Sectiion Begin -->
    {{-- <div class="counter-section">
        <div class="container">
            <div class="b-top">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counter">
                            <div class="counter-img">
                                <img src="{{asset('assets/frontend/img/counter-icon/1.png')}}" alt="">
                            </div>
                            <div class="counter-info">
                                <span>350</span>
                                <p>Apartments Sold</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counter">
                            <div class="counter-img">
                                <img src="{{asset('assets/frontend/img/counter-icon/2.png')}}" alt="">
                            </div>
                            <div class="counter-info">
                                <span>1278</span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counter">
                            <div class="counter-img">
                                <img src="{{asset('assets/frontend/img/counter-icon/3.png')}}" alt="">
                            </div>
                            <div class="counter-info">
                                <span>25</span>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counter">
                            <div class="counter-img">
                                <img src="{{asset('assets/frontend/img/counter-icon/4.png')}}" alt="">
                            </div>
                            <div class="counter-info">
                                <span>17</span>
                                <p>Awards Wone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Count Sectiion End -->
    <!-- Footer Section Begin -->
  @include('layouts.footer');
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
</body>

</html>