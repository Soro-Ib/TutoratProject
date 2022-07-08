<li class="nav-item dropdown pe-3">

    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <img src="{{ asset('image/profile.jpg') }}" alt="Profile" class="rounded-circle">
      <span class="d-none d-md-block dropdown-toggle ps-2">Soro</span>
    </a><!-- End Profile Iamge Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
      <li class="dropdown-header">
        <h6>Soro</h6>
        <span>Data scientist</span>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="{{ route('etudiant.profile') }}">
          <i class="bi bi-person"></i>
          <span>Mon Profile</span>
        </a>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="{{ route("logout") }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right"></i>
          <span>Déconnexion</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
          @csrf
        </form>
      </li>

    </ul><!-- End Profile Dropdown Items -->
  </li><!-- End Profile Nav -->
