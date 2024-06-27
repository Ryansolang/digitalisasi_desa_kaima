<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{url('assetsdepan/img/LH.png')}}">
    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{url('assetsdepan/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{url('assetsdepan/css/fontawesome.min.css')}}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{url('assetsdepan/css/layerslider.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url('assetsdepan/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{url('assetsdepan/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('assetsdepan/css/style1.css')}}">
    
    <link href="{{url('assets/plugins/notifications/css/lobibox.min.css')}}" rel="stylesheet" />


</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="#"><img src="{{url('assetsdepan/img/LH.png')}}" alt="LGOHEAD" class="logo"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
									<li>
										<a href="{{ route('homepage.home') }}">Home</a>
									</li>	
									<li>
										<a href="{{ route('homepage.artikel') }}">Artikel</a>
									</li>	
									<li>
										<a href="{{ route('homepage.aboutus') }}">About Us</a>
									</li>
									<li>
										<a href="{{ route('homepage.layanan') }}">Layanan Surat</a>
									</li>
									<li>
										<a href="{{ route('homepage.keluhan') }}">Ajukan Keluhan</a>
									</li>                                                                        
								   <li class="menu-item-has-children">
										<a href="#none"><span class="has-new-lable">Kategori</a>
										<ul class="sub-menu">
										@forelse ($kategori as $tampilmenukategori)
											<li><a href="{{ route ('homepage.detailkategorimenu',$tampilmenukategori->id) }}">{{$tampilmenukategori->nama_kategori}}</a></li>
										@empty
										<li><a href="#">Tidak ada data</a></li>
										@endforelse 	
										</ul>
									</li>									
                                    @if (Auth::guest())
                            <li>
										<a href="{{ route ('login') }}">Login</a>
									</li>	                       
                            @elseif (Auth::user()->level =='admin')
                            <li>
										<a href="{{ route ('admin.home') }}">Dashboard</a>
									</li>	
                            @else
                            <li>
										<a href="{{ route ('login') }}">Login</a>
									</li>	
                            @endif    					
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                    <div class="col-lg-auto d-none d-lg-block">
                        <p class="header-text"><span class="fw-medium">Welcome to website </span> {{ config('app.name') }}</p>
                    </div>
                    <div class="col-lg-auto">
                        <div class="header-social style-white">
                            <span class="social-title">Follow Us On: </span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="menu-top">
                <div class="row justify-content-between align-items-center gx-sm-0">
                    <div class="col">
                        <div class="header-logo">
                            <a href="#"><img src="{{url('assetsdepan/img/LH.png')}}" alt="TechBiz" class="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto header-info ">
                        <div class="header-info_icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Call Anytime 24/7</span>
                            <div class="header-info_link"><a href="tel:+26921562148">+62 898-6348-314</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-lg-flex">
                        <div class="header-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Mail Us For Support</span>
                            <div class="header-info_link"><a href="mailto:admin@gmail.com">admin@gmail.com</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-xl-flex">
                        <div class="header-info_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Alamat</span>
                            <div class="header-info_link">Desa Kaima Kecamatan Remboken</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
									<li>
										<a href="{{ route('homepage.home') }}">Home</a>
									</li>	
									<li>
										<a href="{{ route('homepage.artikel') }}">Artikel</a>
									</li>	
									<li>
										<a href="{{ route('homepage.aboutus') }}">About Us</a>
									</li>
									<li>
										<a href="{{ route('homepage.layanan') }}">Layanan Surat</a>
									</li>
									<li>
										<a href="{{ route('homepage.keluhan') }}">Ajukan Keluhan</a>
									</li>                                     
								   <li class="menu-item-has-children">
										<a href="#none"><span class="has-new-lable">Kategori</a>
										<ul class="sub-menu">
										@forelse ($kategori as $tampilmenukategori)
											<li><a href="{{ route ('homepage.detailkategorimenu',$tampilmenukategori->id) }}">{{$tampilmenukategori->nama_kategori}}</a></li>
										@empty
										<li><a href="#">Tidak ada data</a></li>
										@endforelse 	
										</ul>
									</li>	

                            @if (Auth::guest())
                            <li>
										<a href="{{ route ('login') }}">Login</a>
									</li>	                       
                            @elseif (Auth::user()->level =='admin')
                            <li>
										<a href="{{ route ('admin.home') }}">Dashboard</a>
									</li>	
                            @else
                            <li>
										<a href="{{ route ('login') }}">Login</a>
									</li>	
                            @endif                                    
                                    
								
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto ">
                            <form action="{{ route('homepage.cariartikel') }}" method="get" class="header-search">
                                <input type="text" required id="cari" name="cari" placeholder="Search here...">
                                <button type="submit" aria-label="search-button"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>