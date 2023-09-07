@extends('dashui.theme')

@section('title') Students @endsection

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
                <h3 class="mb-0 text-white">
                  <i data-feather="user" class="icon-sm me-2"></i> Students
                </h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-12 mt-6">
          <div class="card">
            <div class="card-body">
              <form action="#" method="POST" class="p-5">
                <div class="form-group row mb-4">
                  <label class="col-sm-3 col-form-label">
                    Name
                  </label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" maxlength="30" required="" autocomplete="off"
                      placeholder="Haidar">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-sm-3 col-form-label">NIM</label>
                  <div class="col-sm-9">
                    <input type="text" name="nim" class="form-control" maxlength="10" required="" autocomplete="off"
                      placeholder="2105055">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-sm-3 col-form-label">Username</label>
                  <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" maxlength="30" required=""
                      autocomplete="off">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" maxlength="50" required="">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" maxlength="50" required="">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection