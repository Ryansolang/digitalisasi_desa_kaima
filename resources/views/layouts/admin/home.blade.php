@include('layouts.component.header')
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                  Dashboard
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Main</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Current
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <div class="content">
          <!-- Overview -->
          <div class="row items-push">
            <div class="col-sm-6 col-xxl-3">
              <!-- Pending Orders -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">{{ $countstatistik }}</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Statistik</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                     <i class="fa fa-chart-bar fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ route ('statistik.home') }}">
                    <span>Selengkapnya</span>
                    <i class="fa fa-chart-bar fs-3 text-primary"></i>
                  </a>
                </div>
              </div>
              <!-- END Pending Orders -->
            </div>

            <div class="col-sm-6 col-xxl-3">
              <!-- Pending Orders -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">{{ $countsurat }}</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Surat</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                     <i class="fa fa-chart-bar fs-3 text-primary"></i>
                  </div>
                </div>
              </div>
              <!-- END Pending Orders -->
            </div>

            <div class="col-sm-6 col-xxl-3">
              <!-- Pending Orders -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">{{ $countkeluhan }}</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Keluhan</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                     <i class="fa fa-chart-bar fs-3 text-primary"></i>
                  </div>
                </div>
              </div>
              <!-- END Pending Orders -->
            </div>

            <div class="col-sm-6 col-xxl-3">
              <!-- New Customers -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">1</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Users</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                     <i class="fa fa-chart-bar fs-3 text-primary"></i>
                  </div>
                </div>
              </div>
              <!-- END New Customers -->
            </div>
            <div class="col-sm-6 col-xxl-3">
              <!-- Messages -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">{{ $countartikel }}</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Kategori</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                     <i class="fa fa-chart-bar fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ route ('kategori.home') }}">
                    <span>Selengkapnya</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                </div>
              </div>
              <!-- END Messages -->
            </div>
            <div class="col-sm-6 col-xxl-3">
              <!-- Conversion Rate -->
              <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">{{ $countartikel }}</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Artikel</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                    <i class="fa fa-chart-bar fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ route ('artikel.home') }}">
                    <span>Selengkapnya</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                </div>
              </div>
              <!-- END Conversion Rate-->
            </div>
          </div>
          <!-- END Overview -->

          </div>
        <!-- END Page Content -->
		
      </main>
      <!-- END Main Container -->

@include('layouts.component.footer')
