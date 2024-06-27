@include('layouts.component.header')
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                 Detail Surat {{ $surat->judul_keluhan }}
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Halaman detail surat
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
            <div class="block-content block-content-full">
            <form action="{{ route('surat.uploadsk', $surat->id) }}" method="post" enctype="multipart/form-data">
                                @csrf		
                                @method('PUT')   
				<div class="row">
				  <label class="col-sm-3 col-form-label">Jenis Surat</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $surat->jenis_surat }}" readonly name="jenis_surat">
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Pengirim</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $surat->nama }}" readonly name="nama">
				  </div>
				</div>
				<br>	                
				<div class="row">
				  <label class="col-sm-3 col-form-label">Email</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $surat->email }}" readonly name="email">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Status</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $surat->status }}" readonly name="status">
				  </div>
				</div>
				<br> 
				<div class="row">
				  <label class="col-sm-3 col-form-label">File Attachment KTP</label>
				  <div class="col-sm-9">
					<strong class="text-info"><a href="{{ url ('doc/') }}/{{ $surat->attachment }}" target="_blank">{{ $surat->attachment }}</a></strong>
				  </div>
				</div>
				<br> 
				<div class="row">
				  <label class="col-sm-3 col-form-label">File Attachment KK</label>
				  <div class="col-sm-9">
					<strong class="text-info"><a href="{{ url ('doc/') }}/{{ $surat->attachment_kk }}" target="_blank">{{ $surat->attachment_kk }}</a></strong>
				  </div>
				</div>
				<br> 								
				<div class="row">
				  <label class="col-sm-3 col-form-label">Tanggal Dikirim</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $surat->created_at }}" readonly name="created_at">
				  </div>
				</div>
				<br>                              	                				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Data Lainnya</label>
				  <div class="col-sm-9">
					<?php
                            echo $surat->isi;
                    ?>
				  </div>
				</div>			

                @if ($surat->status == 'Pending')
				<div class="row">
				  <label class="col-sm-3 col-form-label"> </label>
				  <div class="col-sm-9">
                  <button class="btn btn-primary" type="submit">Beritahu Pengirim Bahwa SK Sudah Bisa diambil</button>
				  </div>
				</div>                                
                @endif		            
</form>
            </div>
          </div>
          <!-- END Labels on top -->
      </main>
      <!-- END Main Container -->
  <script src="{{url('assets/plugins/tinymce/tinymce.min.js')}}"></script>
  <script>tinymce.init({ selector:'textarea' });</script> 
@include('layouts.component.footer')
