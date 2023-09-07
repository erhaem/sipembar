<!-- Sidebar -->
<nav class="navbar-vertical navbar">
  <div class="nav-scroller">
    <!-- Brand logo -->
    <a class="navbar-brand" href="/">
      <h3 class="text-light">SIPEMBAR</h3>
    </a>
    <!-- Navbar nav -->
    <ul class="navbar-nav flex-column" id="sideNavbar">
      <!-- dashboard link -->
      <li class="nav-item">
        <a class="nav-link has-arrow {{ request()->routeIs('superadmin.dashboard') ? 'active' : '' }}"
          href="{{ route('superadmin.dashboard') }}">
          <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
        </a>
      </li>

      <!-- Manage Users section -->
      <li class="nav-item">
        <div class="navbar-heading">Master Data</div>
      </li>

      <!-- Data Admin Lab -->
      <li class="nav-item">
        <a class="nav-link has-arrow {{ request()->routeIs('superadmin.adminlab') ? 'active' : '' }}"
          href="{{ route('superadmin.adminlab') }}">
          <i data-feather="users" class="nav-icon icon-xs me-2"></i> Admin Lab
        </a>
      </li>

      <!-- Data Mahasiswa -->
      <li class="nav-item">
        <a class="nav-link has-arrow {{ request()->routeIs('superadmin.students') ? 'active' : '' }}"
          href="{{ route('superadmin.students') }}">
          <i data-feather="users" class="nav-icon icon-xs me-2"></i> Students
        </a>
      </li>

      <!-- Data Laboratorium -->
      <li class="nav-item">
        <a class="nav-link has-arrow {{ request()->routeIs('superadmin.laboratories') ? 'active' : '' }}"
          href="{{ route('superadmin.laboratories') }}">
          <i data-feather="database" class="nav-icon icon-xs me-2"></i> Laboratories
        </a>
      </li>
    </ul>

  </div>
</nav>