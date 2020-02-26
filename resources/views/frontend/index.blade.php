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
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.min.css')}}" type="text/css">
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
                        <a href="/">
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
    <section class="hero-section home-page set-bg" data-setbg="{{asset('assets/frontend/img/bg.jpg')}}">
        <div class="container hero-text text-white">
            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Temukan </h2>
            <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;">Rumah Impian Anda.</h1>
        </div>
    </section>

    {{-- <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('img/andir.jpg');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
                <h1>Kreta Api Jawa Barat</h1>
  
              </div>
            </div>
          </div>
        </div>
        <div class="intro-section" style="background-image: url('assets/frontend/images/ba.jpg');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
                <h1>Kreta Api Jawa Barat</h1>
              </div>
            </div>
          </div>
        </div> --}}

    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
    {{-- <div class="filter-search">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <form class="filter-form">
                        <div class="Lokasi">
                            <p>Lokasi</p>
                            <select class="filter-Lokasi">
                                <option value="">London</option>
                                <option value="">US</option>
                                <option value="">UAE</option>
                            </select>
                        </div>
                        <div class="search-type">
                            <p>Property Type</p>
                            <select class="filter-property">
                                <option value="">House</option>
                                <option value="">Resort</option>
                                <option value="">Hotel</option>
                            </select>
                        </div>
                        <div class="price-range">
                            <p>Price</p>
                            <div class="range-slider">
                                <div id="slider-range">
                                    <div tabindex="0"
                                        class="ui-slider-handle ui-corner-all ui-state-default slider-left">50k</div>
                                    <div tabindex="0"
                                        class="ui-slider-handle ui-corner-all ui-state-default slider-right">300k</div>
                                </div>
                            </div>
                        </div>
                        <div class="bedrooms">
                            <p>Bedrooms</p>
                            <div class="room-filter-pagi">
                                <div class="bf-item">
                                    <input type="radio" name="room" id="room-1">
                                    <label for="room-1">1</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="room" id="room-2">
                                    <label for="room-2">2</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="room" id="room-3">
                                    <label for="room-3">3</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="room" id="room-4">
                                    <label for="room-4">4+</label>
                                </div>
                            </div>
                        </div>
                        <div class="bathrooms">
                            <p>Bathrooms</p>
                            <div class="room-filter-pagi">
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-1">
                                    <label for="bathroom-1">1</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-2">
                                    <label for="bathroom-2">2</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-3">
                                    <label for="bathroom-3">3</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-4">
                                    <label for="bathroom-4">4+</label>
                                </div>
                            </div>
                        </div>
                        <div class="search-btn">
                            <button type="submit"><i class="flaticon-search"></i>Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Filter Search Section End -->
    <!-- Hotel Room Section Begin -->
    <section class="hotel-rooms spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="{{asset('assets/frontend/img/rooms/rancasari1.jpg')}}">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Rancasari</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Lihat Map</span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Building</p>
                                        <img src="{{asset('assets/frontend/img/rooms/size.png')}}" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span>50m²</span>
                                    </div>
                                    
                                    <div class="size">
                                        <p>Land</p>
                                        <img src="{{asset('assets/frontend/img/rooms/luas.ico')}}" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span>40m²</span>
                                    </div>
                                    <div class="beds">
                                        <p>Kamar</p>
                                        <img src="{{asset('assets/frontend/img/rooms/bed.png')}}" alt="">
                                        <span>9</span>
                                    </div>
                                    {{-- <div class="baths">
                                        <p>Baths</p>
                                        <img src="{{asset('assets/frontend/img/rooms/bath.png')}}" alt="">
                                        <span>2</span>
                                    </div> --}}
                                    {{-- <div class="garage">
                                        <p>Garage</p>
                                        <img src="{{asset('assets/frontend/img/rooms/garage.png')}}" alt="">
                                        <span>1</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="room-price">
                                <p>Harga</p>
                                <span>Rp345,000,00</span>
                            </div>
                            <a href="#" class="site-btn btn-line">Lihat Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="{{asset('assets/frontend/img/rooms/buahbatu2.jpg')}}">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Buah Batu</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Lihat Map
                                            </span></a>
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
                                        <p>Kamar</p>
                                        <img src="{{asset('assets/frontend/img/rooms/bed.png')}}" alt="">
                                        <span>9</span>
                                    </div>
                                    {{-- <div class="baths">
                                        <p>Baths</p>
                                        <img src="{{asset('assets/frontend/img/rooms/bath.png')}}" alt="">
                                        <span>2</span>
                                    </div> --}}
                                    {{-- <div class="garage">
                                        <p>Garage</p>
                                        <img src="{{asset('assets/frontend/img/rooms/garage.png')}}" alt="">
                                        <span>1</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="room-price">
                                <p>Harga</p>
                                <span>Rp345.000,00</span>
                            </div>
                            <a href="#" class="site-btn btn-line">Lihat Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="{{asset('assets/frontend/img/rooms/soreang1.jpg')}}">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Soreang</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Lihat Map
                                            </span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="{{asset('assets/frontend/img/rooms/size.png')}}" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span>50m²</span>
                                    </div>
                                    <div class="size">
                                        <p>Land</p>
                                        <img src="{{asset('assets/frontend/img/rooms/luas.ico')}}" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span>40m²</span>
                                    </div>
                                    <div class="beds">
                                        <p>Kamar</p>
                                        <img src="{{asset('assets/frontend/img/rooms/bed.png')}}" alt="">
                                        <span>3</span>
                                    </div>
                                    {{-- <div class="baths">
                                        <p>Baths</p>
                                        <img src="{{asset('assets/frontend/img/rooms/bath.png')}}" alt="">
                                        <span>1</span>
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
                                <span>Rp345.000,00</span>
                            </div>
                            <a href="#" class="site-btn btn-line">Lihat Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="{{asset('assets/frontend/img/rooms/paster1.jpg')}}">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Pasteur</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Lihat Map
                                            </span></a>
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
                                        <p>Kamar</p>
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
                                <span>Rp345.000,00</span>
                            </div>
                            <a href="#" class="site-btn btn-line">Lihat Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="{{asset('assets/frontend/img/rooms/dago1.jpg')}}">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Dago</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Lihat Map
                                            </span></a>
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
                                        <p>Kamar</p>
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
                                <span>Rp345.000,00</span>
                            </div>
                            <a href="#" class="site-btn btn-line">Lihat Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="{{asset('assets/frontend/img/rooms/ciwastra1.jpg')}}">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Ciwastra</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Lihat Map
                                            </span></a>
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
                                        <p>Kamar</p>
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
                                <span>Rp345.000,00</span>
                            </div>
                            <a href="#" class="site-btn btn-line">Lihat Property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotel Room Section End -->
    <!-- Popular Room Section Begin -->
    {{-- <section class="popular-room set-bg p-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="slider-active owl-carousel">
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    {{-- <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Lihat Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
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
                                            <p>Kamar</p>
                                            <img src="{{asset('assets/frontend/img/rooms/bed.png')}}" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="{{asset('assets/frontend/img/rooms/bath.png')}}" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="{{asset('assets/frontend/img/rooms/garage.png')}}" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>Harga</p>
                                    <span>Rp345.000,00</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">Lihat Property</a>
                            </div>
                        </div> --}}
                        {{-- <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Lihat Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="{{asset('assets/frontend/img/rooms/size.png')}}" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span>2561 sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Kamar</p>
                                            <img src="{{asset('assets/frontend/img/rooms/bed.png')}}" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="{{asset('assets/frontend/img/rooms/bath.png')}}" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="{{asset('assets/frontend/img/rooms/garage.png')}}" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>Harga</p>
                                    <span>Rp345.000.00</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">Lihat Property</a>
                            </div>
                        </div>
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Lokasi</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Lihat Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="{{asset('assets/frontend/img/rooms/size.png')}}" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span>2561 sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Kamar</p>
                                            <img src="{{asset('assets/frontend/img/rooms/bed.png')}}" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="{{asset('assets/frontend/img/rooms/bath.png')}}" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="{{asset('assets/frontend/img/rooms/garage.png')}}" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>Harga</p>
                                    <span>Rp345.000,00</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">Lihat Property</a>
                            </div>
                        </div> --}}
                    </div>
                {{-- </div>
            </div> --}}
        {{-- </div>
    </section> --}}
    <!-- Popular Room Section End -->
    <!-- Newslatter Section Begin -->
    {{-- <section class="newslatter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="newslatter-text">
                        <img src="{{asset('assets/frontend/img/message.png')}}" alt="">
                        <h4>Join our mailing to get weekly updates on <br>our exclusive deals.</h4>
                        <form>
                            <input type="text" placeholder="Email address">
                            <button type="submit" class="site-btn news-btn">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Newslatter Section End -->
    <!-- Servies Section Begin -->
    {{-- <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-side">
                        <h2><span>Mengapa ada harus memilih rumah ini ?</span><br>Karena rumah yang kami jual <br>memiliki kualitas yang baik.</h2> --}}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id est nec nisl tristique
                            dignissim semper sed diam. Donec vulputate neque in massa hendrerit, non dignissim ipsum
                            varius. Mauris dignissim libero ipsum, nec molestie nulla molestie at. Nam imperdiet
                            hendrerit finibus. Sed porttitor ultricies sagittis. Nullam lobortis nec quam vitae
                            venenatis. </p> --}}
                    {{-- </div>
                </div> --}}
                {{-- <div class="col-lg-6">
                    <div class="right-side">
                        <ul>
                            <li><img src="{{asset('assets/frontend/img/check.png')}}" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </li>
                            <li><img src="{{asset('assets/frontend/img/check.png')}}" alt="">Praesent tincidunt diam in ante faucibus tristique.</li>
                            <li><img src="{{asset('assets/frontend/img/check.png')}}" alt="">Vivamus id nisl sed mi varius lobortis.</li>
                            <li><img src="{{asset('assets/frontend/img/check.png')}}" alt="">Suspendisse sit amet erat placerat, molestie neque id
                            </li>
                            <li><img src="{{asset('assets/frontend/img/check.png')}}" alt="">Fusce pretium libero sit amet ipsum posuere pretium.
                            </li>
                            <li><img src="{{asset('assets/frontend/img/check.png')}}" alt="">Praesent tincidunt diam in ante faucibus tristique.</li>
                        </ul>
                    </div>
                </div> --}}
            {{-- </div>
        </div>
    </section> --}}
    <!-- Servies Section End -->
    {{-- <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Don’t forget to follow us on Instagram @homes</h2>
                </div>
            </div>
        </div>
    </section> --}}
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