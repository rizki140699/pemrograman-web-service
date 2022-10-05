<nav class="navbar navbar-expand-lg bg-white border border-bottom-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <a class="navbar-brand" href="#" style="font-size: 16px; font-weight: 700;">
                <img src="/icon/eyes.png" alt="eyes"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse b-1" id="navbarNavDropdown">
            <ul style="font-size: 14px;" class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
            </ul>
        </div>
        <div>
            @auth                
            <div class="dropdown">
                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>Log out</a></li>
                </ul>
            </div>
            
            @else
                <a href='/login' class="btn btn-sm btn-outline-secondary fs-small">login</a>
            @endauth
        </div>
    </div>
</nav>