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
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/news">News</a>
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
                    <a class="nav-link active" aria-current="page" href="/events">Events</a>
                </li>

                <li class="nav-item dropdown">
                    <button class="btn nav-link dropdown-toggle me-3" type="button" data-bs-toggle="dropdown"
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
                        {{-- <li>
                            <button class="dropdown-item d-flex align-items-center" type="button"
                                data-bs-theme-value="auto">
                                <i class="bi bi-circle-half me-2 opacity-50" data-theme-icon="bi-circle-half"></i>
                                Auto
                            </button>
                        </li> --}}
                    </ul>
                </li>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline btn-sm me-2" href="/login">Sign in</button>
                    <button class="btn btn-primary btn-sm me-2"><i class="bi bi-person-plus"></i> Sign up</button>
                </form>
            </ul>
        </div>
    </div>
</nav>
