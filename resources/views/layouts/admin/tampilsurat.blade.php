@include('layouts.component.header')
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                 Surat
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Halaman dalam mengelola data Surat
                </h2>
              </div>
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
                List Surat
              </h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
                <thead>
				  <tr>
					<th>No</th>
					<th>Jenis Surat</th>
					<th>Nama (Email)</th>
					<th>Status</th>
					<th>Tanggal dibuat</th>
					<th>Aksi</th>
				  </tr>
				  </thead>

				  <tbody>
				  @forelse ($surat as $tampilsurat)         
				  <tr>
				  <td>{{ $loop->iteration }}</td>
				  <td>{{$tampilsurat->jenis_surat}}</td>
				  <td>{{$tampilsurat->nama}} ({{$tampilsurat->email}})</td>
				  <td>{{$tampilsurat->status}}</td>
				  <td>{{$tampilsurat->created_at}}</td>
				  <td>
						<a href="{{ route ('surat.detailsurat', $tampilsurat->id) }}" target="_blank" class="btn btn-primary btn-sm">
									 Detail 
						</a>   			
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
