<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('images/ajclogo.png') }}" alt="Logo" class="logo" width="100px">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ajcpisonetnavbar" aria-controls="ajcpisonetnavbar" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-menu-button-wide-fill text-danger" viewBox="0 0 16 16">
            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
          </svg>
        </button>
      <div class="collapse navbar-collapse" id="ajcpisonetnavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link {{ Request::path() ==  '/' ? 'active' : ''  }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::path() ==  'promos' ? 'active' : ''  }}" href="promos">Promos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::path() ==  'contactus' ? 'active' : ''  }}" href="contactus">Contact</a>
          </li>
          <li class="nav-item ms-lg-auto">
            <a class="nav-link {{ Request::path() ==  'login' ? 'active' : ''  }}" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::path() ==  'register' ? 'active' : ''  }}" href="register">Register</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>