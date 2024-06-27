@include('layouts.component.header')
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                 Kategori
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Halaman dalam mengelola data kategori
                </h2>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
					<a class="btn btn-primary" href="{{ route ('kategori.tambah') }}">
					  <i class="bi-person-plus-fill me-1"></i> Tambah Kategori
					</a>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <!-- Dynamic Table Responsive -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">
                List Kategori
              </h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
                <thead>
					  <tr>
						<th>No</th>
						<th>Nama Kategori</th>
						<th>Hastag Kategori</th>
						<th>Tanggal Dibuat</th>
						<th>Terakhir Diedit</th>
						<th>Aksi</th>
					  </tr>
                </thead>
			  <tbody>
			  @forelse ($kategori_artikel as $tampilkategori_artikel)         
			  <tr>
			  <td>{{ $loop->iteration }}</td>
			  <td>{{$tampilkategori_artikel->nama_kategori}}</td>
			  <td>{{$tampilkategori_artikel->hastag_kategori}}</td>
			  <td>{{$tampilkategori_artikel->created_at}}</td>
			  <td>{{$tampilkategori_artikel->updated_at}}</td>
			  <td>
					<a href="{{ route ('kategori.edit', $tampilkategori_artikel->id) }}" target="_blank" class="btn btn-primary btn-sm">
							 Edit 
					</a>  
					<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalhapus{{ $tampilkategori_artikel->id }}" class="btn btn-danger btn-sm">
							Hapus 
					</a>  			
																	<form action="{{ route('kategori.hapus', $tampilkategori_artikel->id) }}" method="post">
																					@csrf
																					@method('DELETE')
																						<!-- Button trigger modal -->
																						<!-- Modal -->
																						<div class="modal fade" id="modalhapus{{ $tampilkategori_artikel->id }}"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																							<div class="modal-dialog">
																								<div class="modal-content">
																									<div class="modal-header">
																										<h5 class="modal-title mt-0" id="myModalLabel">Hapus Data {{ $tampilkategori_artikel->nama_kategori }}?</h5>
																										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
																										</button>
																									</div>
																									<div class="modal-body">
																										<h6 class="text-center"> 
																											Apa anda yakin ingin menghapus data ini ?
																										</h6>
																									</div>
																									<div class="modal-footer">
																									<button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Tutup</button>
																										<button type="submit" class="btn btn-danger">Hapus</button>
																									</div>
																								</div>
																							</div>
																						</div>											  
																		</form>  			
			  </td>		
				@empty
				<tr>
				 <td colspan="6" class="text-center">Tidak ada data</td>																			
				</tr>                                                
				@endforelse     
			  </tbody>
              </table>
            </div>
          </div>
          <!-- Dynamic Table Responsive -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

@include('layouts.component.footer')
