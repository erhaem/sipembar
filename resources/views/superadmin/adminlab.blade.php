@extends('dashui.theme')

@section('title') Admin Lab @endsection

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
                  <i data-feather="user" class="icon-sm me-2"></i> Admin Lab
                </h3>
              </div>
              <div>
                <a href="{{ route('superadmin.laboratories')}}" class="btn btn-light">+ Add Admin Lab</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-12 mt-6">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive table-card">
                <table class="table text-nowrap mb-0 table-centered">
                  <thead class="table-light">
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Laboratory</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $i => $user)
                    <tr>
                      <td>{{ $i + 1 }}.</td>
                      <td>{{ $user->user->name }}</td>
                      <td>{{ $user->user->username }}</td>
                      <td>{{ $user->user->email }}</td>
                      <td>
                        {{ $user->is_head_admin ? 'Head Admin' : 'Operator' }}
                      </td>
                      <td>{{ $user->laboratory->name }}</td>
                      <td>
                        <a class="btn btn-icon btn-xs rounded-circle bg-warning text-light" href="#!" role="button">
                          <i data-feather="edit" class="icon-xs"></i>
                        </a>
                        <a class="btn btn-icon btn-xs rounded-circle bg-danger text-light" href="#!" role="button">
                          <i data-feather="trash" class="icon-xs"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-end mt-3">
                  {{ $data->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection