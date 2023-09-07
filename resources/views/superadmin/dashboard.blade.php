@extends('dashui.theme')

@section('title') Dashboard @endsection

@section('content')
<div id="db-wrapper">
  @include('superadmin.sidebar')

  <div id="page-content">
    @include('superadmin.navbar')
    <!-- Container fluid -->
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <!-- Page header -->
          <div>
            <div class="d-flex justify-content-between align-items-center">
              <div class="mb-2 mb-lg-0">
                <h3 class="mb-0 text-white">Super Admin</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- card Admin Lab -->
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
          <!-- card -->
          <div class="card">
            <!-- card body -->
            <div class="card-body">
              <!-- heading -->
              <div class="d-flex justify-content-between align-items-center
                      mb-3">
                <div>
                  <h4 class="mb-0">Admin Lab</h4>
                </div>
                <div class="icon-shape icon-md bg-light-primary text-primary
                        rounded-2">
                  <i class="bi bi-people fs-4"></i>
                </div>
              </div>
              <!-- project number -->
              <div>
                <h1 class="fw-bold">{{ $adminLabQuantity ?? 0 }}</h1>
              </div>
            </div>
          </div>
        </div>

        <!-- card Mahasiswa -->
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
          <!-- card -->
          <div class="card">
            <!-- card body -->
            <div class="card-body">
              <!-- heading -->
              <div class="d-flex justify-content-between align-items-center
                        mb-3">
                <div>
                  <h4 class="mb-0">Students</h4>
                </div>
                <div class="icon-shape icon-md bg-light-primary text-primary
                          rounded-2">
                  <i class="bi bi-people fs-4"></i>
                </div>
              </div>
              <!-- project number -->
              <div>
                <h1 class="fw-bold">{{ $studentsQuantity ?? 0 }}</h1>
              </div>
            </div>
          </div>
        </div>

        <!-- card Labs -->
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
          <!-- card -->
          <div class="card">
            <!-- card body -->
            <div class="card-body">
              <!-- heading -->
              <div class="d-flex justify-content-between align-items-center
                        mb-3">
                <div>
                  <h4 class="mb-0">Laboratories</h4>
                </div>
                <div class="icon-shape icon-md bg-light-primary text-primary
                          rounded-2">
                  <i class="bi bi-database fs-4"></i>
                </div>
              </div>
              <!-- project number -->
              <div>
                <h1 class="fw-bold">{{ $labsQuantity ?? 0 }}</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection