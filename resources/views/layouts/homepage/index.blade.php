@include('layouts.component.headerhomepage')
		
    <!--==============================
      Hero Area
    ==============================-->
    <section class="vs-hero-wrapper position-relative  ">
        <div class="vs-hero-carousel" data-height="850" data-container="1900" data-slidertype="responsive">
            <!-- Slide 1-->
			@foreach ($artikel as $tampilartikel)  
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="{{ url ('gambarartikel/') }}/{{ $tampilartikel->gambar_artikel }}" class="ls-bg" alt="hero-bg" />
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;" class="ls-l ls-text-layer d-hd-none" data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;"></div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);" class="ls-l ls-text-layer d-hd-none" data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;"></div>
                <!-- <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:588px; padding-bottom:9px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">{{$tampilartikel->foreign_kategori->nama_kategori}}</p> -->
                <!-- <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#010101; font-family:Exo;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Judul
                </h1> -->
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#010101; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                   {{$tampilartikel->judul_artikel}}
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#010101; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">Silahkan klik tombol read more untuk melihat informasi lebih jelas.</div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route ('homepage.aboutus')}}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">{{$tampilartikel->foreign_kategori->nama_kategori}}</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Judul &amp;
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    {{$tampilartikel->judul_artikel}}
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route ('homepage.aboutus')}}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Judul &amp;
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    {{$tampilartikel->judul_artikel}}
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route ('homepage.aboutus')}}" class="vs-btn ls-hero-btn" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}"class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#next" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:1685px; top:50%;" class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-right"></i></span>
                    </div>
                </a>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#prev" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:50%;" class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-left"></i></span>
                    </div>
                </a>
            </div>
			@endforeach
        </div>
    </section>
    <div data-bg-src="assetsdepan/img/bg/ab-bg-1-1.jpg">
        <!--==============================
    Features Area
    ==============================-->
        <section class="feature-wrap1  space-top space-extra-bottom">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="assetsdepan/img/icon/fe-1-1.png" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="#">Development Services</a></h3>
                            <p class="feature-text">Website dibangun dengan menggunakan berbagai macam plugin demi membuat kenyamanan pengguna dalam mejalankan website ini.</p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="assetsdepan/img/icon/fe-1-2.png" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="#">Information Services</a></h3>
                            <p class="feature-text">Informasi yang dipublish adalah informasi yang terkait dengan kecamatan remboken</p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="assetsdepan/img/icon/fe-1-3.png" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="#">Admin Service</a></h3>
                            <p class="feature-text">Informasi yang dipublish hanya bisa dilakukan oleh admin tanpa campur tangan orang lain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    About Us
    ==============================-->
        <section class="position-relative space-bottom">
            <span class="about-shape1 d-none d-xl-block">Remboken</span>
            <div class="container z-index-common">
                <div class="row gx-60">
                    <div class="col-lg-6 col-xl-5 mb-50 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box1">
                            <div class="img-1">
                                <img src="{{ url('assetsdepan/img/logom.png')}}"  alt="About image">
                            </div>
                            <div class="img-2">
                                <img src="{{ url('assetsdepan/img/aboutus.png')}}" height="300" alt="About image">
                                <a class="play-btn style2 position-center popup-video" href="https://www.youtube.com/watch?v=JwMde8ycyMk"><i class=""><i class="fas fa-play"></i></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Welcome !</span>
                        <h2 class="sec-title h1">Selamat Datang di Website Desa Kaima Kecamatan Remboken!</h2>
                        <p class="mb-4 mt-1 pb-3">Remboken adalah sebuah kecamatan di Kabupaten Minahasa, Sulawesi Utara, Indonesia. Kecamatan ini terletak pada ketinggian kurang lebih 700 meter dpl. Temperaturnya rata-rata maksimum 23 °C dan minimum 15 °C.</p>
                        <div class="call-media">
                            <div class="call-media__icon"><img src="assetsdepan/img/icon/tel-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="call-media__label">24 HOURS SERVICE AVAILABLE</span>
                                <p class="call-media__info">Call Us: <a href="tel:+6668880000">+62 898-6348-314</a></p>
                            </div>
                        </div>
                        <a href="{{ route ('homepage.aboutus')}}" class="vs-btn">About Us<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
   <!--==============================
    Counter Area
    ==============================-->
    <div class="position-relative ">
        <div class="counter-shape1"></div>
        <div class="bg-black z-index-common space" data-bg-src="assetsdepan/img/hitam.jpeg">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-between gy-4">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assetsdepan/img/icon/count-1-4.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">{{ $datapenduduk->jumlah }}</span>
                                <p class="counter-media__title text-white">Jumlah Penduduk</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assetsdepan/img/icon/count-1-4.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">{{ $dataumur0->jumlah }}</span>
                                <p class="counter-media__title text-white">Umur 0-10 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assetsdepan/img/icon/count-1-4.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">{{ $dataumur11->jumlah }}</span>
                                <p class="counter-media__title text-white">Umur 11-20</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assetsdepan/img/icon/count-1-4.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">{{ $dataumur21->jumlah }}</span>
                                <p class="counter-media__title text-white">Umur 21-59</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <!--==============================
    FAQ Area
    ==============================-->
    <section class="faq-wrap1  ">
        <div class="faq-shape1" data-bg-src="assetsdepan/img/bg/faq-bg-1-1.jpg"></div>
        <div class="faq-shape2" data-bg-src="assetsdepan/img/bg/faq-bg-1-2.jpg"></div>
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box2">
                        <div class="img-1"><img src="assetsdepan/img/faq.png" alt="FAQ image"></div>
                        <div class="img-2"><img src="{{ url('assetsdepan/img/logom.png')}}" alt="FAQ image"><a class="play-btn style3 position-center" href="https://www.youtube.com/watch?v=JwMde8ycyMk"><i class=""><i class="fas fa-play"></i></i></a></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <span class="sec-subtitle text-white"><i class="fas fa-bring-forward"></i>FAQ Website</span>
                    <h2 class="sec-title text-white mb-4 pb-2 h1">Bagaimana kami dapat membantu Anda?</h2>
                    <div class="accordion accordion-style1" id="faqVersion1">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apakah untuk mengakses informasi yang ada pada website ini berbayar?
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Untuk semua informasi yang diupload oleh admin adalah gratis sehingga para user bisa mengakses informasi-informasi yang telah disediakan website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apakah pengunjung bisa menambah informasi ?
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Pengunjung tidak dapat menambah informasi namun dapat jika informasi tersebut penting maka pengunjung bisa dapat menghubungi admin untuk melakukan publish terhadap informasi tersebut.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apakah website ini telah responsive ?
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Website ini sudah mendukung fitur responsive sehingga layar device user bisa menyesuaikan,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>	
	
    <section class=" space-bottom">
        <div class="container">
		<br>
		<br>
		<br>
		<br>
            <div class="sec-line-wrap">
                <div class="sec-line"></div>
                <h2 class="sec-title2">Galeri</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
                <div class="col-auto"><img src="assetsdepan/img/g1.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g2.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g3.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g4.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g5.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g6.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g7.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g8.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g9.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g10.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g12.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g13.jpg" alt="Brand"></div>
                <div class="col-auto"><img src="assetsdepan/img/g14.jpg" alt="Brand"></div>
            </div>
        </div>
    </section>	
	
   <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper  space-top space-extra-bottom" data-bg-src="assetsdepan/img/bg/blog-bg-1-1.jpg">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">5 Artikel Terbaru</span>
                        <h2 class="sec-title h1">Daftar Artikel Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
			@foreach ($artikel as $tampilartikel)  
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ url ('gambarartikel/') }}/{{ $tampilartikel->gambar_artikel }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>{{$tampilartikel->created_at}}</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}"> {{$tampilartikel->judul_artikel}} </a></h3>
                                <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
			@endforeach
            </div>
        </div>
    </section>	
	
    <!--==============================
    Team Area
    ==============================-
    <section class=" space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Hukum Tua</span>
                        <h2 class="sec-title h1">Hukum Tua Tiap Desa</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Poula V. Kindangen.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/poula.kindangen"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Poula V. Kindangen</a></h3>
                            <p class="team-degi">Hukum Tua Leleko</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Max P. J. Kasenda.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/max.kasenda.5"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Max P. J. Kasenda</a></h3>
                            <p class="team-degi">Hukum Tua Paslaten </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Jouke Tielung.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/jouke.tielung"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Jouke Tielung ST</a></h3>
                            <p class="team-degi">Hukum Tua Talikuran  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Youke D. Mamahit.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Youke D. Mamahit</a></h3>
                            <p class="team-degi">Hukum Tua Timu  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Grace Tulenan, SIP.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Grace Tulenan, SIP</a></h3>
                            <p class="team-degi">Hukum Tua Sendangan  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/team/t-1-2.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Arthur J. Supit</a></h3>
                            <p class="team-degi">Hukum Tua Kaima  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Daniel Kussoy.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/daniel.kussoy.1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Daniel Kussoy</a></h3>
                            <p class="team-degi">Hukum Tua Sinuian  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/T. Harter Kasenda.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">T. Harter Kasenda</a></h3>
                            <p class="team-degi">Hukum Tua Pareprei </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Rudy Wungkar, SIP.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/rudy.wungkar.92"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Rudy Wungkar, SIP</a></h3>
                            <p class="team-degi">Hukum Tua Pulutan  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Brayen Uwuh.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Brayen Uwuh</a></h3>
                            <p class="team-degi">Hukum Tua Kasuratan  </p>
                        </div>
                    </div>
                </div>	
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="assetsdepan/img/Arnold Ponamon.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/arnold.ponamon/photos"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Arnold Ponamon</a></h3>
                            <p class="team-degi">Hukum Tua Tampusu  </p>
                        </div>
                    </div>
                </div>					
            </div>
        </div>
    </section>
    <!--==============================	-->
	@include('layouts.component.footerhomepage')	