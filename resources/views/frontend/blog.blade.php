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
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slicknav.min.css')}}" type="text/css">
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
    <section class="hero-section set-bg blog" data-setbg="{{asset('assets/frontend/img/bg.jpg')}}">
        <div class="container hero-text text-white">
            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Blog</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
   
    <!-- Filter Search Section End -->
    <!-- Blog Section Begin -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-ins">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-item">
                                    <div class="blog-pic">
                                        <img src="{{asset('assets/frontend/img/rooms/rancasari1.jpg')}}" alt="">
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-title">
                                            <h5>Bagaimana menemukan tempat yang sempurna untuk rumahmu selanjutnya.</h5>
                                            <p class="blog-time"><i class="flaticon-clock"></i><span>5 min read</span>
                                            </p>
                                            <p class="blog-posted"><i class="flaticon-profile"></i><span>by homes</span>
                                            </p>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in justo
                                            elementum, fermentum justo ac, rutrum erat. Aenean ut malesuada diam. Proin
                                            bibendum sapien sodales, convallis dolor facilisis, ultricies nisl. Sed
                                            malesuada nibh sed velit ultricies, id varius lacus feugiat. Aenean
                                            vestibulum, nisl eget accumsan aliquam, magna diam convallis risus, in
                                            tristique metus sem eu tortor. Cras leo libero, fermentum quis aliquam et,
                                            tincidunt at dolor.</p>
                                        <a href="#" class="site-btn blog-btn">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-item">
                                    <div class="blog-pic">
                                        <img src="{{asset('assets/frontend/img/rooms/buahbatu2.jpg')}}" alt="">
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-title">
                                            <h5>Bagaimana menemukan tempat yang sempurna untuk rumahmu selanjutnya.</h5>
                                            <p class="blog-time"><i class="flaticon-clock"></i><span>5 min read</span>
                                            </p>
                                            <p class="blog-posted"><i class="flaticon-profile"></i><span>by homes</span>
                                            </p>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in justo
                                            elementum, fermentum justo ac, rutrum erat. Aenean ut malesuada diam. Proin
                                            bibendum sapien sodales, convallis dolor facilisis, ultricies nisl. Sed
                                            malesuada nibh sed velit ultricies, id varius lacus feugiat. Aenean
                                            vestibulum, nisl eget accumsan aliquam, magna diam convallis risus, in
                                            tristique metus sem eu tortor. Cras leo libero, fermentum quis aliquam et,
                                            tincidunt at dolor.</p>
                                        <a href="#" class="site-btn blog-btn">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-item">
                                    <div class="blog-pic">
                                        <img src="{{asset('assets/frontend/img/rooms/soreang1.jpg')}}" alt="">
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-title">
                                            <h5>Bagaimana menemukan tempat yang sempurna untuk rumahmu selanjutnya.</h5>
                                            <p class="blog-time"><i class="flaticon-clock"></i><span>5 min read</span>
                                            </p>
                                            <p class="blog-posted"><i class="flaticon-profile"></i><span>by homes</span>
                                            </p>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in justo
                                            elementum, fermentum justo ac, rutrum erat. Aenean ut malesuada diam. Proin
                                            bibendum sapien sodales, convallis dolor facilisis, ultricies nisl. Sed
                                            malesuada nibh sed velit ultricies, id varius lacus feugiat. Aenean
                                            vestibulum, nisl eget accumsan aliquam, magna diam convallis risus, in
                                            tristique metus sem eu tortor. Cras leo libero, fermentum quis aliquam et,
                                            tincidunt at dolor.</p>
                                        <a href="#" class="site-btn blog-btn">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-pagination">
                                    <a href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-right">
                                <div class="category-search">
                                    <input type="text" placeholder="Search">
                                    <button type="submit">Search</button>
                                    <h5>Kategori</h5>
                                    <div class="categories-table">
                                        <table>
                                            <tr>
                                                <td>Bandung Barat</td>
                                            </tr>
                                            <tr>
                                                <td>Bandung Selatan</td>
                                            </tr>
                                            <tr>
                                                <td>Bandung Timur</td>
                                            </tr>
                                            {{-- <tr>
                                                <td>Market Trends</td>
                                            </tr>
                                            <tr>
                                                <td>Tips & Advice</td>
                                            </tr>
                                            <tr>
                                                <td>Home Design</td>
                                            </tr> --}}
                                        </table>
                                    </div>
                                </div>
                                <div class="instagram-info">

                                    <div class="row">
                                        <div class="instagram-pic">
                                            <div class="col-lg-12">
                                                <img class="pic-1" src="{{asset('assets/frontend/img/rooms/rancasari1.jpg')}}" alt="">
                                                <img class="pic-2" src="{{asset('assets/frontend/img/rooms/buahbatu2.jpg')}}" alt="">
                                                <img class="pic-3" src="{{asset('assets/frontend/img/rooms/soreang1.jpg')}}" alt="">
                                                <img class="pic-4" src="{{asset('assets/frontend/img/rooms/paster1.jpg')}}" alt="">
                                                <img class="pic-5" src="{{asset('assets/frontend/img/rooms/dago1.jpg')}}" alt="">
                                                <img class="pic-6" src="{{asset('assets/frontend/img/rooms/ciwastra1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-agents">
                                    <h5>Agen</h5>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="{{asset('assets/frontend/img/blog/1_agent.png')}}" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Oliver G Harris</h5>
                                            <p>Phone : <span>1-812-117-2663</span></p>
                                            <p>Email : <span>oliver@homes.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="{{asset('assets/frontend/img/blog/2_agent.png')}}" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Oliver G Harris</h5>
                                            <p>Phone : <span>1-812-117-2663</span></p>
                                            <p>Email : <span>oliver@homes.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="{{asset('assets/frontend/img/blog/3_agent.png')}}" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Oliver G Harris</h5>
                                            <p>Phone : <span>1-812-117-2663</span></p>
                                            <p>Email : <span>oliver@homes.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="{{asset('assets/frontend/img/blog/4_agent.png')}}" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Oliver G Harris</h5>
                                            <p>Phone : <span>1-812-117-2663</span></p>
                                            <p>Email : <span>oliver@homes.com</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="room-items">
                                <div class="room-img set-bg" data-setbg="{{asset('assets/frontend/img/rooms/buahbatu2.jpg')}}">
                                    <a href="#" class="room-content">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                                <div class="room-text">
                                    <div class="room-details">
                                        <div class="room-title">
                                            <h5>Country Style House with beautiful garden and terrace</h5>
                                            <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                            <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show
                                                    on Map</span></a>
                                        </div>
                                    </div>
                                    <div class="room-features">
                                        <div class="room-info">
                                            <div class="size">
                                                <p>Lot Size</p>
                                                <img src="{{asset('assets/frontend/img/rooms/size.png')}}" alt="">
                                                <i class="flaticon-bath"></i>
                                                <span>2561 sqft</span>
                                            </div>
                                            <div class="size">
                                                <p>Land</p>
                                                <img src="{{asset('assets/frontend/img/rooms/luas.ico')}}" alt="">
                                                <i class="flaticon-bath"></i>
                                                <span>40m²</span>
                                            </div>
                                            <div class="beds">
                                                <p>Beds</p>
                                                <img src="{{asset('assets/frontend/img/rooms/bed.png')}}" alt="">
                                                <span>9</span>
                                            </div>
                                            {{-- <div class="baths">
                                                <p>Baths</p>
                                                <img src="{{asset('assets/frontend/img/rooms/bath.png')}}" alt="">
                                                <span>2</span>
                                            </div>
                                            <div class="garage">
                                                <p>Garage</p>
                                                <img src="{{asset('assets/frontend/img/rooms/garage.png')}}" alt="">
                                                <span>1</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="room-price">
                                        <p>Harga</p>
                                        <span>Rp 345,000</span>
                                    </div>
                                    <a href="#" class="site-btn btn-line">Lihat Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
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