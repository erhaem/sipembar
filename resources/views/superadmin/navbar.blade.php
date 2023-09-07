<div class="header @@classList">
  <!-- Navbar horizontal (header) -->
  <nav class="navbar-classic navbar navbar-expand-lg">
    <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>

    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
      <li class="dropdown stopevent">
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md">
            <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" class="rounded-circle" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
          <div class="px-4 pb-0 pt-2">
            <div class="lh-1 ">
              <h5 class="mb-1">{{ auth()->user()->name }}</h5>
              <small>Super Admin</small>
            </div>
            <div class="dropdown-divider mt-3 mb-2"></div>
          </div>

          <ul class="list-unstyled">
            <li>
              <a class="dropdown-item" href="#">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                Profile
              </a>
            </li>
            <li>
              <form action="{{ route('logout') }}" method="post" id="logout-form">
                @csrf
              </form>
              <a href="#" class="dropdown-item" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Log Out
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
</div>