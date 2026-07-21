<header class="parna-header">
    <div class="header-container">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-logo">
            <div class="brand-icon">
                <i class="bi bi-shield-shaded"></i>
            </div>
            <div class="brand-text">
                <h1>PARNA</h1>
                <p>PARSADAAN POMPARAN NI RAJA NAI AMBATON</p>
            </div>
        </a>

        <!-- Navigation Links -->
        <ul class="nav-menu">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">BERANDA</a>
            </li>
            <li>
                <a href="{{ route('tentang') }}" class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}">
                    TENTANG PARNA <i class="bi bi-chevron-down" style="font-size:0.7rem;"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('marga') }}" class="nav-link {{ request()->routeIs('marga') ? 'active' : '' }}">MARGA PARNA</a>
            </li>
            <li>
                <a href="{{ route('tarombo') }}" class="nav-link {{ request()->routeIs('tarombo') ? 'active' : '' }}">
                    TAROMBO <i class="bi bi-chevron-down" style="font-size:0.7rem;"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('berita') }}" class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}">BERITA & KEGIATAN</a>
            </li>
            <li>
                <a href="{{ route('galeri') }}" class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}">GALERI</a>
            </li>
            <li>
                <a href="{{ route('kontak') }}" class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}">KONTAK</a>
            </li>
        </ul>
    </div>
</header>
