@include('layouts.component.header')
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                 Tambah Artikel
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Halaman dalam menambah data artikel
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <!-- Labels on top -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Form Tambah Artikel</h3>
            </div>
            <div class="block-content block-content-full">
            <form action="{{ route('artikel.prosestambah')}}" method="post" enctype="multipart/form-data">
              @csrf		              
				<div class="row">
				  <label class="col-sm-3 col-form-label">Judul Artikel</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="judul_artikel">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Kategori Artikel</label>
				  <div class="col-sm-9">
					<select class="form-control" required name="kategori">
							<option selected disabled>Pilih Kategori</option>
						@foreach ($kategori_artikel as $tampilkategori_artikel)  
							<option value="{{ $tampilkategori_artikel->id }}">{{$tampilkategori_artikel->nama_kategori}}</option>
						@endforeach
					</select>
				  </div> 
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Gambar/Tumbnail Artikel</label>
				  <div class="col-sm-9">
					<input type="file" class="form-control" required name="gambar_artikel">
                                    @error('gambar_artikel')
									<span class="badge badge-danger" role="alert"> <strong class="text-danger">{{ $message }}</strong></span>
                                     @enderror    					
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Isi Artikel</label>
				  <div class="col-sm-9">
					<textarea name="isi_artikel"></textarea>
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
          <!-- END Labels on top -->
      </main>
      <!-- END Main Container -->
  <script src="{{url('assets/plugins/tinymce/tinymce.min.js')}}"></script>
  <script>tinymce.init({ selector:'textarea' });</script> 
@include('layouts.component.footer')
