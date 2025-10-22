<nav class="navbar navbar-expand-lg shadow-sm"
     style="background: linear-gradient(90deg, var(--primary), var(--secondary));">
  <div class="container-fluid px-4">
    {{-- Brand / Logo --}}
    <a class="navbar-brand fw-bold text-white" href="{{ route('dashboard') }}">
        Sistem Akademik Kampus
    </a>

    {{-- Toggle untuk mode mobile --}}
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Menu Navigasi --}}
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->is('dashboard') ? 'fw-bold' : 'opacity-75' }}"
            href="{{ route('dashboard', ['username' => request()->query('username')]) }}">
            Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->is('profile') ? 'fw-bold' : 'opacity-75' }}"
            href="{{ route('profile', ['username' => request()->query('username')]) }}">
            Profil
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->is('pengelolaan') ? 'fw-bold' : 'opacity-75' }}"
            href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">
            Pengelolaan
            </a>
        </li>
        <li class="nav-item ms-3">
          <a href="{{ route('login') }}" class="btn btn-light btn-sm text-primary fw-semibold">
            Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
