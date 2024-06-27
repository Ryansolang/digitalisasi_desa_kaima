@include('layouts.component.header')
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                 Edit Statistik 
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Halaman dalam mengedit data statistik
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
              <h3 class="block-title">Form Edit Statistik</h3>
            </div>
            <div class="block-content block-content-full">
            <form action="{{ route('statistik.prosesupdate', $statistik->id) }}" method="post">
                                @csrf		
                                @method('PUT')   
				<div class="row">
				  <label class="col-sm-3 col-form-label">Judul Statistik</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" name="nama_statistik" id="nama_statistik" value="{{ $statistik->nama_statistik }}">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Jumlah</label>
				  <div class="col-sm-9">
					<input type="number" class="form-control" name="jumlah" id="jumlah" value="{{ $statistik->jumlah }}">
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<button class="btn btn-primary" type="submit">Update</button>
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
