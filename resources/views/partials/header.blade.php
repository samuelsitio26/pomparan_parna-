<header class="parna-header">
    <div class="header-container">
        <!-- Logo Brand -->
        <a href="{{ url('/') }}" class="brand-logo">
            <div class="brand-icon">
                <i class="bi bi-shield-shaded"></i>
            </div>
            <div class="brand-text">
                <h1>PARNA</h1>
                <p>PARSADAAN POMPARAN NI RAJA NAI AMBATON</p>
            </div>
        </a>

        <!-- Navigation Menu -->
        <ul class="nav-menu">
            <li>
                <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">BERANDA</a>
            </li>
            <li>
                <a href="{{ url('/tentang-parna') }}" class="nav-link {{ Request::is('tentang-parna') ? 'active' : '' }}">TENTANG PARNA</a>
            </li>
            <li>
                <a href="{{ url('/marga-parna') }}" class="nav-link {{ Request::is('marga-parna') ? 'active' : '' }}">MARGA PARNA</a>
            </li>
            <li>
                <a href="{{ url('/tarombo') }}" class="nav-link {{ Request::is('tarombo') ? 'active' : '' }}">TAROMBO</a>
            </li>
            <li>
                <a href="{{ url('/berita-kegiatan') }}" class="nav-link {{ Request::is('berita-kegiatan') ? 'active' : '' }}">BERITA & KEGIATAN</a>
            </li>
            <li>
                <a href="#" class="nav-link">GALERI</a>
            </li>
            <li>
                <a href="#" class="nav-link">KONTAK</a>
            </li>
        </ul>

        <!-- User Login Button -->
        <div>
            <a href="#" class="btn-login">
                <i class="bi bi-person-fill"></i> LOGIN / DAFTAR
            </a>
        </div>
    </div>
</header>
