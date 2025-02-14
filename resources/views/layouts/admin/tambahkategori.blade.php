@include('layouts.component.header')
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                 Tambah Kategori
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Halaman dalam menambah data kategori
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
              <h3 class="block-title">Form Tambah Kategori</h3>
            </div>
            <div class="block-content block-content-full">
            <form action="{{ route('kategori.prosestambah')}}" method="post">
              @csrf		              
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Kategori</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="nama_kategori">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Hastag Kategori</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="hastag_kategori">
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

@include('layouts.component.footer')
