@include('layouts.component.headerhomepage')  
     <div class="breadcumb-wrapper " data-bg-src="{{ url('assetsdepan/img/bc.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Halaman Artikel</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="#">Artikel</a></li>
                        <li>Tampil Data</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row ">
			@foreach ($artikel as $tampilartikel) 
                <div class="col-md-6 col-lg-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ url ('gambarartikel/') }}/{{ $tampilartikel->gambar_artikel }}" alt="Blog Image" class="w-100">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}"><i class="far fa-calendar"></i>{{$tampilartikel->created_at}}</a>
                                <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}"><i class="fal fa-user"></i>by admin</a>
                            </div>
                            <h3 class="blog-title h5"><a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}">{{$tampilartikel->judul_artikel}}</a></h3>
                            <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
				@endforeach	
            </div>
        </div>
    </section>
    
@include('layouts.component.footerhomepage')		