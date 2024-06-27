@include('layouts.component.headerhomepage')

    <div class="breadcumb-wrapper " data-bg-src="{{ url('assetsdepan/img/bc.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Detail {{ $artikel->judul_artikel}}</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="#">Artikel</a></li>
                        <li>{{ $artikel->judul_artikel}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                            <img src="{{ url ('gambarartikel/') }}/{{ $artikel->gambar_artikel }}" class="img-fuid" alt="Blog Image">
					
                        <div class="blog-content">
                            <div class="blog-meta">		<br>
                                <a href="#"><i class="far fa-calendar"></i>{{ $artikel->created_at }}</a>
                                <a href="#"><i class="fal fa-user"></i>by admin</a>
                            </div>
                            <h2 class="blog-title">{{ $artikel->judul_artikel }}</h2>
                            <?php echo $artikel->isi_artikel ?>
                        </div>
                        <div class="share-links clearfix  ">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <span class="share-links-title">Kategori</span>
                                    <div class="tagcloud">
                                        <a href="#">{{ $artikel->foreign_kategori->nama_kategori }}</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Post Pagination Style -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories   ">
                            <h3 class="widget_title">Kategori</h3>
                            <ul>
							@forelse ($kategori as $tampilmenukategori)
                                <li>
                                    <a href="{{ route ('homepage.detailkategorimenu',$tampilmenukategori->id) }}">{{$tampilmenukategori->nama_kategori}}</a>
                                </li>
								@empty
                                <li>
                                    <a href="#">Tidak ada data</a>
                                </li>								
								@endforelse 	
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Berita Lainnya</h3>
                            <div class="recent-post-wrap">
							@foreach ($artikelterbaru as $tampilartikel)  
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}"><img src="{{ url ('gambarartikel/') }}/{{ $tampilartikel->gambar_artikel }}" height="80" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('homepage.detailartikel', $tampilartikel->id) }}">{{$tampilartikel->judul_artikel}}</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}">{{$tampilartikel->created_at}}</a>
                                        </div>
                                    </div>
                                </div>
							@endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    
		
@include('layouts.component.footerhomepage')	