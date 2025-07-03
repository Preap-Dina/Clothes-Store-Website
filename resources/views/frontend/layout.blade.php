<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('css/frontend/theme.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('backend/vendor/css/core.css')}}" class="template-customizer-core-css" />
        <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>    
        <header>
            <div class="container">
                <div class="logo">
                    <a href="">
                        {{-- <img src="../uploads/{{$Logo[0]->thumbnail}}" width="180px"> --}}
                        <h1>
                            KH FASHION
                        </h1>
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="shop">SHOP</a>
                    </li>
                    <li>
                        <a href="news">NEWS</a>
                    </li>
                </ul>
                <div class="search">
                    <form action="/search" method="get">
                        <input type="text" name="s" class="box" placeholder="SEARCH HERE">
                        <button>
                            <div style="background-image: url(uploads/search.png);
                                        width: 28px;
                                        height: 28px;
                                        background-position: center;
                                        background-size: contain;
                                        background-repeat: no-repeat;
                            "></div>
                        </button>
                    </form>
                </div>
                <div>
                    @auth
                        <div class="d-flex gap-2">
                            {{-- <button class="btn btn-primary"><a class="text-light text-decoration-none" href="{{ route('logout') }}">Logout</a></button>                       --}}
                             <li class="list-unstyled nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ Auth::user()->profile }}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{ Auth::user()->profile }}" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                        </div>
                                        <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">
                                            @auth
                                            {{ Auth::user()->name }}
                                            @endauth
                                        </span>
                                        <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                                </ul>
                            </li>
                        </div>
                    @else
                        <div class="border rounded-2 py-2 px-3">
                            <button class="btn btn-primary"><a class="text-light text-decoration-none" href="{{ route('login') }}">Login</a></button>
                            <button class="btn btn-light"><a class="text-decoration-none" href="{{ route('register') }}">Signup</a></button>
                        </div>
                    @endauth
                </div>
            </div>
        </header>
        @yield('content')
        <footer>
            <span>
                AllRight Recieved @ 2023
            </span>
        </footer>

    </body>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}"></script>
</html>