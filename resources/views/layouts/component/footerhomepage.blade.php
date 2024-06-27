    <!--==============================
			Footer Area
	==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ url('assetsdepan/img/shape/bg-footer-1-1.jpg')}}">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-4 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">About Us</h3>
                            <div class="vs-widget-about">
                                <p class="footer-text">Website Desa Kaima Kecamatan Remboken Sulawesi Utara</p>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-auto">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
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
										<a href="{{ route ('login') }}">Login</a>
									</li>									
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-auto">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Kategori</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
										@forelse ($kategori as $tampilmenukategori)
											<li><a href="{{ route ('homepage.detailkategorimenu',$tampilmenukategori->id) }}">{{$tampilmenukategori->nama_kategori}}</a></li>
										@empty
										<li><a href="#">Tidak ada data</a></li>
										@endforelse 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Maps</h3>
                            <div class="footer-map">
                                <iframe title="office location map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63822.241586772165!2d124.77519347576347!3d1.2359338440887635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287400ad3976d4b%3A0x4030bfbcaf78830!2sKec.%20Remboken%2C%20Kabupaten%20Minahasa%2C%20Sulawesi%20Utara!5e0!3m2!1sid!2sid!4v1691584067955!5m2!1sid!2sid" width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023. All rights reserved by Admin.</p>
            </div>
        </div>
    </footer>


    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>



    <!--********************************
			Code End  Here 
	******************************** -->


    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{url('assetsdepan/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <!-- <script src="assets/js/app.min.js"></script> -->
    <script src="{{url('assetsdepan/js/slick.min.js')}}"></script>
    <!-- Layerslider -->
    <script src="{{url('assetsdepan/js/layerslider.utils.js')}}"></script>
    <script src="{{url('assetsdepan/js/layerslider.transitions.js')}}"></script>
    <script src="{{url('assetsdepan/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('assetsdepan/js/bootstrap.min.js')}}"></script>
    <!-- WOW.js Animation -->
    <script src="{{url('assetsdepan/js/wow.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{url('assetsdepan/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{url('assetsdepan/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('assetsdepan/js/isotope.pkgd.min.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{url('assetsdepan/js/main.js')}}"></script>

    <script src="{{url('assets/plugins/tinymce/tinymce.min.js')}}"></script>
  <script>tinymce.init({ selector:'textarea' });</script> 



    <script src="{{url('assets/js/pages/be_tables_datatables.min.js')}}"></script>	
        <script src="{{url('assets/plugins/notifications/js/lobibox.min.js')}}"></script>
        <script src="{{url('assets/plugins/notifications/js/notifications.min.js')}}"></script>   

        <script>
            @if (Session::has('success'))
                Lobibox.notify('success', {
                    pauseDelayOnHover: true,
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    icon: 'bi bi-bookmark-check-fill',
                    msg: "{{ Session::get('success')}}"
                });
            @endif
        </script>
        <script>
            @if ($message = Session::get('error'))
            Lobibox.notify('error', {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: 'top right',
                icon: 'bi bi-bookmark-x',
                msg: "{{ Session::get('error')}}"
            });			
            @endif
        </script>  

</body>

</html>