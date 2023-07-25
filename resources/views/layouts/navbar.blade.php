<nav class="navbar navbar-expand-lg navbar-light sticky-top border-1"data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <a href="index.html" class="logo m-0 float-start"><img src="{{ 'front-template/images/logo-black.png' }}"
                style="width: 100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('article.index') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/playlist">Daftar Putar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/watch">Tonton</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('galeri.index') }}">Galeri</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('events.index') }}">Acara</a>
                </li>

                {{-- <li class="nav-item dropdown">
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
                        <li>
                            <button class="dropdown-item d-flex align-items-center" type="button"
                                data-bs-theme-value="auto">
                                <i class="bi bi-circle-half me-2 opacity-50" data-theme-icon="bi-circle-half"></i>
                                Auto
                            </button>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="btn btn-outline-primary" href="{{ route('login') }}" role="button">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('register') }}" role="button">Sign Up</a>
                </li> --}}
                <div class="navbar-cta" role="search">
                    <a class="btn btn-outline-primary border-purple me-2 text-bold"
                        href="{{ route('login') }}">Login</a>
                    <a class="btn btn-primary border-purple me-2 text-purple" href="{{ route('register') }}">Sign
                        up</a>
                </div>
            </ul>


            {{-- <div class="top_player ">
                <a href="https://live.pramborsfm.com/" target="_blank">
                    <div class="pic is-circle for-desktop ">
                        <figure class="ratioo ratioo1">
                            <img src="{{ 'front-template/images/play_2_sm.png' }}">
                        </figure>
                    </div>
                    <div class="text for-desktop">
                        <div class="status">LISTENING NOW</div>
                        <h3>RSB 89.3 FM</h3>
                    </div>
                    <div class="text for-mobile">
                        <div class="status">NOW PLAYING</div>
                        <h3>PramborsFM</h3>
                    </div>
                </a>
            </div> --}}

            <a class="header__button bg-gen streaming_playing_now" href="/streaming" id="streaming_playing_now">
                <div class="default">Streaming<br><span>Radio</span><br><span class="default-button"><i
                            class="fa fa-play"></i> listening now</span></div>
            </a>


        </div>
    </div>
</nav>
