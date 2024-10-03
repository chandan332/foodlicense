<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ Vite::image('logo.jpg') }}" alt="" width="200" height="70" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-2">
                    <a class="nav-link" aria-current="page"
                        href="@auth('web'){{ route('logout') }} @else {{ route('login') }} @endauth">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        @if (Auth::check())
                            Logout
                        @else
                            Login
                        @endif
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link @if ($route == '/') active @endif" aria-current="page"
                        href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link @if ($route == '/about') active @endif" aria-current="page"
                        href="/about">
                        <i class="fa-solid fa-user"></i> About
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link @if ($route == '/contact') active @endif" aria-current="page"
                        href="/contact">
                        <i class="fa-solid fa-address-book"></i>
                        Contact us
                    </a>
                </li>
                {{-- <li class="nav-item me-2">
                    <div class="dropdown">
                        <a class="nav-link @if ($route == '/application') active @endif dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-file"></i>
                            File & Drafting
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('form.show') }}">Food Application</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('form.show') }}">Food Renewal</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
