@include('layouts.component.headerhomepage')  
     <div class="breadcumb-wrapper " data-bg-src="{{ url('assetsdepan/img/bc.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Halaman Layanan Surat</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="#">Halaman</a></li>
                        <li>Layanan Surat</li>
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
                        <h2 class="sec-title h1">Form Layanan Surat</h2>
                    
                            <form action="{{ route('surat.prosestambah')}}" method="post" enctype="multipart/form-data">
                            @csrf		              
                                <div class="row">
                                <label class="col-sm-3 col-form-label">Jenis Surat</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="jenis_surat">
                                    <option>Surat Keterangan Kelahiran</option>
                                    <option>Surat Keterangan Kematian</option>
                                    <option>Surat Keterangan Tidak Mampu</option>
                                    <option>Surat Keterangan Domosili</option>
                                    <option>Surat Keterangan Catatan Kepolisian</option>
                                    <option>Surat Keterangan Penghasilan Orangtua</option>
                                    <option>Surat Keterangan Pindah Penduduk</option>
                                    <option>Surat Keterangan Ahli Waris</option>
                                    <option>Surat Keterangan Usaha</option>
</select>
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
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" required name="email">
                                </div>
                                </div>
                                <br>  

                                <div class="row">
                                <label class="col-sm-3 col-form-label">File Attachment KTP</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" required name="attachment">
                                    @error('attachment')
									<strong class="text-danger">{{ $message }}</strong>
                                     @enderror 		
                                 <p  style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ff0000; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">* <span>memasukan KTP</span></p>							
                                </div>
                                </div>
                                <br>       
                                
                                <div class="row">
                                <label class="col-sm-3 col-form-label">File Attachment KK</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" required name="attachment_kk">
                                    @error('attachment_kk')
									<strong class="text-danger">{{ $message }}</strong>
                                     @enderror 		
                                 <p  style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ff0000; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">* <span>memasukan KTP</span></p>							
                                </div>
                                </div>
                                <br>                                       
	
                                <div class="row">
                                <label class="col-sm-3 col-form-label">Isi</label>
                                <div class="col-sm-9">
                                    <textarea name="isi">untuk data pada bagian ini mohon menyesuaikan dengan data yang dimininta, contoh jika ingin membuat
                                        sk domisili wajib memasukan data nik, jenis kelamin dan lain-lain. unntuk melihat data yang diminta silahkan liat artikel yang telah diupload.
                                    </textarea>
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