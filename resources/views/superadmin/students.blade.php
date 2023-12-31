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
              <div>
                <a href="{{ route('superadmin.students_add')}}" class="btn btn-light">+ Add Student</a>
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
                      <th>NIM</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Class</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $i => $user)
                    <tr>
                      <td>{{ $i + 1 }}.</td>
                      <td>{{ $user->nim }}</td>
                      <td>{{ $user->user->name }}</td>
                      <td>{{ $user->user->username }}</td>
                      <td>{{ $user->user->email }}</td>
                      <td>{{ $user->class }}</td>
                      <td>
                        <a class="btn btn-icon btn-xs rounded-circle bg-warning text-light" href="#!" role="button">
                          <i data-feather="edit" class="icon-xs"></i>
                        </a>
                        <button type="button" class="btn btn-icon btn-xs rounded-circle bg-danger text-light"
                          onclick="confirmDelete('{{ $user->id }}')">
                          <i data-feather="trash" class="icon-xs"></i>
                        </button>
                        <form id="delete-form-{{ $user->id }}"
                          action="{{ route('superadmin.students.delete', ['id' => $user->id]) }}" method="POST"
                          style="display: none;">
                          @csrf
                          @method('DELETE')
                        </form>
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

  <script>
    function confirmDelete(studentId) {
        const confirmed = confirm("Are you sure you want to delete this student?");

        if (confirmed) {
            const form = document.getElementById(`delete-form-${studentId}`);
            if (form) {
                form.submit();
            }
        }
    }
  </script>