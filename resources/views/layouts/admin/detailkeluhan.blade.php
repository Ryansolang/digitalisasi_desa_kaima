@include('layouts.component.header')
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                 Detail Keluhan {{ $keluhan->judul_keluhan }}
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Halaman detail keluhan
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

				<div class="row">
				  <label class="col-sm-3 col-form-label">Judul Keluhan</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $keluhan->judul_keluhan }}" readonly name="judul_keluhan">
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Pengirim</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $keluhan->nama }}" readonly name="nama">
				  </div>
				</div>
				<br>	                                				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Isi Keluhan</label>
				  <div class="col-sm-9">
					<?php
                            echo $keluhan->isi_keluhan;
                    ?>
				  </div>
				</div>
				<br>				

            </div>
          </div>
          <!-- END Labels on top -->
      </main>
      <!-- END Main Container -->
  <script src="{{url('assets/plugins/tinymce/tinymce.min.js')}}"></script>
  <script>tinymce.init({ selector:'textarea' });</script> 
@include('layouts.component.footer')
