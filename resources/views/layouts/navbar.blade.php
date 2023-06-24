{{-- <nav class="site-nav navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: var(--bs-dark);">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="index.html" class="logo m-0 float-start"><img src="{{ 'front-template/images/logo.png' }}"
                                style="width: 50%"></a>
                    </div>
                    <div class="col-8 text-center">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index.html">News</a></li>
                            <li><a href="index.html">Listen</a></li>
                            <li><a href="index.html">Watch</a></li>
                            <li><a href="category.html">Media</a></li>
                            <li><a href="category.html">Event</a></li>
                            <li class="dropdown text-black">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sun-fill theme-icon-active"
                                        data-theme-icon-active="bi-sun-fill"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button class="dropdown-item d-flex align-items-center" type="button"
                                            data-bs-theme-value="light">
                                            <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i>
                                            Light
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item d-flex align-items-center" type="button"
                                            data-bs-theme-value="dark">
                                            <i class="bi bi-moon-stars-fill me-2 opacity-50"
                                                data-theme-icon="bi bi-moon-stars-fill"></i>
                                            Dark
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item d-flex align-items-center" type="button"
                                            data-bs-theme-value="auto">
                                            <i class="bi bi-circle-half me-2 opacity-50"
                                                data-theme-icon="bi bi-circle-half"></i>
                                            Auto
                                        </button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top">
    <div class="container">
        <a href="index.html" class="logo m-0 float-start"><img src="{{ 'front-template/images/logo.png' }}"
                style="width: 80px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Listen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Watch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Event</a>
                </li>
                {{-- <li><button type="button" class="btn btn-outline-primary me-2">Sign in</button></li>
                <li><button type="button" class="btn btn-outline-primary me-2">Sign up</button></li> --}}

                <li class="nav-item dropdown">
                    <button class="btn nav-link dropdown-toggle me-2" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-sun-fill theme-icon-active" data-theme-icon-active="bi-sun-fill"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button"
                                data-bs-theme-value="light">
                                <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i>
                                Light
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button"
                                data-bs-theme-value="dark">
                                <i class="bi bi-moon-stars-fill me-2 opacity-50"
                                    data-theme-icon="bi-moon-stars-fill"></i>
                                Dark
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button"
                                data-bs-theme-value="auto">
                                <i class="bi bi-circle-half me-2 opacity-50" data-theme-icon="bi-circle-half"></i>
                                Auto
                            </button>
                        </li>
                    </ul>
                </li>
                <form class="d-flex" role="search">
                    <button class="btn btn-primary btn-sm me-2">Sign in</button>
                    <button class="btn btn-primary btn-sm me-2">Sign up</button>
                </form>
            </ul>
        </div>
    </div>
</nav>
