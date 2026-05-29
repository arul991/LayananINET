<header class="navbar navbar-expand-md d-print-none sticky-top">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/logo.svg') }}" alt="LayananINET" style="height: 36px;">
      </a>
    </h1>
    <div class="navbar-nav flex-row order-md-last">
      <div class="nav-item d-none d-md-flex me-3">
        <div class="btn-list flex-nowrap">
          <a href="https://github.com" class="btn" target="_blank" rel="noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
            Source code
          </a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
          <span class="avatar avatar-md" style="background-image: url({{ asset('assets/avatars/000m.jpg') }})"></span>
          <div class="d-none d-xl-block ps-2">
            <div>{{ Auth::user()->name }}</div>
            <small class="text-muted d-block mt-1">{{ ucfirst(Auth::user()->role) }}</small>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto"><span class="avatar avatar-md" style="background-image: url({{ asset('assets/avatars/000m.jpg') }})"></span></div>
                <div class="col">
                  <div class="font-weight-medium">{{ Auth::user()->name }}</div>
                  <small class="text-muted">{{ Auth::user()->email }}</small>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 7v5l3 3" /></svg>
            Profile
          </a>
          <a href="#" class="dropdown-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.24 3.957h-8.24a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M18 22v-6" /><path d="M21 19l-3 -3l-3 3" /></svg>
            Settings
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2 -2v-2" /><path d="M7 12h14l-3 -3m0 6l3 -3" /></svg>
            Sign out
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

<form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
    @csrf
</form>