@include('layouts.component.headerhomepage')  
     <div class="breadcumb-wrapper " data-bg-src="{{ url('assetsdepan/img/bc.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Halaman Ajukan Keluhan</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="#">Halaman</a></li>
                        <li>Ajukan Keluhan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
<br>
<br>
<br>
<br>


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
                        <h2 class="sec-title h1">Form Ajukan Keluhan</h2>
                    
                            <form action="{{ route('keluhan.prosestambah')}}" method="post" enctype="multipart/form-data">
                            @csrf		              
                                <div class="row">
                                <label class="col-sm-3 col-form-label">Judul Keluhan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="judul_keluhan">
                                </div>
                                </div>
                                <br>
                                
                                <div class="row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" required name="nama">
                                </div>
                                </div>
                                <br>                                
	
                                <div class="row">
                                <label class="col-sm-3 col-form-label">Isi Keluhan</label>
                                <div class="col-sm-9">
                                    <textarea name="isi"></textarea>
                                </div>
                                </div>
                                <br>				
                                <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                                </div>				
                            </form>	                        
                       
                    </div>
                </div>
            </div>
        </section>
    
@include('layouts.component.footerhomepage')		