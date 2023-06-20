<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">RSB</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class=active>
            <a class="nav-link" href=""><i class="fas fa-fire"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="menu-header">Menu</li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Master Data</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('penyiar.index') }}">Penyiar</a></li>
                <li><a class="nav-link" href="#">Playlist</a></li>
                <li><a class="nav-link" href="#">Siaran</a></li>
                <li><a class="nav-link" href="#">News</a></li>
                <li><a class="nav-link" href="#">Galery</a></li>
                <li><a class="nav-link" href="#">User</a></li>
                {{-- <li><a class="nav-link" href="/register">Register</a></li>
                <li><a class="nav-link" href="/login">Login</a></li> --}}
            </ul>
        </li>
        <li>
            <a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank
                    Page</span></a>
        </li>
    </ul>
</aside>
