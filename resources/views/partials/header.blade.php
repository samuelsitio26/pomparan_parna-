<header class="parna-header">
    <div class="header-container">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-logo">
            <div class="brand-logo-wrapper">
                <img src="{{ asset('images/logo.png') }}" alt="PARNA Logo" class="brand-logo-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="brand-icon-fallback" style="display: none;">
                    <i class="bi bi-shield-shaded"></i>
                </div>
            </div>
            <div class="brand-text">
                <h1>PARNA</h1>
                <p>PARSADAAN POMPARAN NI RAJA NAI AMBATON</p>
            </div>
        </a>

        <!-- Navigation Links (Desktop) -->
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
                <a href="{{ route('marga') }}" class="nav-link {{ request()->routeIs('marga') ? 'active' : '' }}">MARGA PARNA <i class="bi bi-chevron-down" style="font-size:0.7rem;"></i></a>
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

        <!-- Hamburger Button (Mobile/Tablet) -->
        <button class="header-hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNavOffcanvas" aria-controls="mobileNavOffcanvas" aria-label="Menu">
            <i class="bi bi-list"></i>
        </button>
    </div>
</header>

<!-- Mobile Offcanvas Navigation -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNavOffcanvas" aria-labelledby="mobileNavOffcanvasLabel" style="max-width: 280px;">
    <div class="offcanvas-header" style="background: #611818; padding: 1rem 1.2rem;">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('images/logo.png') }}" alt="PARNA Logo" style="height: 36px; filter: brightness(0) invert(1);" onerror="this.style.display='none';">
            <div>
                <div style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: #FFFFFF; line-height: 1;">PARNA</div>
                <div style="font-size: 0.55rem; color: #E8D4A8; letter-spacing: 0.5px;">PARSADAAN POMPARAN NI RAJA NAI AMBATON</div>
            </div>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
    </div>
    <div class="offcanvas-body" style="padding: 0; background: #FAF5EE;">
        <nav>
            <ul style="list-style: none; padding: 0.5rem 0; margin: 0;">
                <li>
                    <a href="{{ route('home') }}" style="display: flex; align-items: center; gap: 12px; padding: 14px 1.4rem; font-size: 0.9rem; font-weight: 700; color: {{ request()->routeIs('home') ? '#611818' : '#2D231F' }}; text-decoration: none; border-bottom: 1px solid #EAE1D7; background: {{ request()->routeIs('home') ? '#FAF0E6' : 'transparent' }};">
                        <i class="bi bi-house-door-fill" style="color: #611818; font-size: 1.05rem; width: 20px; text-align:center;"></i> BERANDA
                    </a>
                </li>
                <li>
                    <a href="{{ route('tentang') }}" style="display: flex; align-items: center; gap: 12px; padding: 14px 1.4rem; font-size: 0.9rem; font-weight: 700; color: {{ request()->routeIs('tentang') ? '#611818' : '#2D231F' }}; text-decoration: none; border-bottom: 1px solid #EAE1D7; background: {{ request()->routeIs('tentang') ? '#FAF0E6' : 'transparent' }};">
                        <i class="bi bi-info-circle-fill" style="color: #611818; font-size: 1.05rem; width: 20px; text-align:center;"></i> TENTANG PARNA
                    </a>
                </li>
                <li>
                    <a href="{{ route('marga') }}" style="display: flex; align-items: center; gap: 12px; padding: 14px 1.4rem; font-size: 0.9rem; font-weight: 700; color: {{ request()->routeIs('marga') ? '#611818' : '#2D231F' }}; text-decoration: none; border-bottom: 1px solid #EAE1D7; background: {{ request()->routeIs('marga') ? '#FAF0E6' : 'transparent' }};">
                        <i class="bi bi-card-checklist" style="color: #611818; font-size: 1.05rem; width: 20px; text-align:center;"></i> MARGA PARNA
                    </a>
                </li>
                <li>
                    <a href="{{ route('tarombo') }}" style="display: flex; align-items: center; gap: 12px; padding: 14px 1.4rem; font-size: 0.9rem; font-weight: 700; color: {{ request()->routeIs('tarombo') ? '#611818' : '#2D231F' }}; text-decoration: none; border-bottom: 1px solid #EAE1D7; background: {{ request()->routeIs('tarombo') ? '#FAF0E6' : 'transparent' }};">
                        <i class="bi bi-diagram-3-fill" style="color: #611818; font-size: 1.05rem; width: 20px; text-align:center;"></i> TAROMBO
                    </a>
                </li>
                <li>
                    <a href="{{ route('berita') }}" style="display: flex; align-items: center; gap: 12px; padding: 14px 1.4rem; font-size: 0.9rem; font-weight: 700; color: {{ request()->routeIs('berita') ? '#611818' : '#2D231F' }}; text-decoration: none; border-bottom: 1px solid #EAE1D7; background: {{ request()->routeIs('berita') ? '#FAF0E6' : 'transparent' }};">
                        <i class="bi bi-newspaper" style="color: #611818; font-size: 1.05rem; width: 20px; text-align:center;"></i> BERITA & KEGIATAN
                    </a>
                </li>
                <li>
                    <a href="{{ route('galeri') }}" style="display: flex; align-items: center; gap: 12px; padding: 14px 1.4rem; font-size: 0.9rem; font-weight: 700; color: {{ request()->routeIs('galeri') ? '#611818' : '#2D231F' }}; text-decoration: none; border-bottom: 1px solid #EAE1D7; background: {{ request()->routeIs('galeri') ? '#FAF0E6' : 'transparent' }};">
                        <i class="bi bi-images" style="color: #611818; font-size: 1.05rem; width: 20px; text-align:center;"></i> GALERI
                    </a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}" style="display: flex; align-items: center; gap: 12px; padding: 14px 1.4rem; font-size: 0.9rem; font-weight: 700; color: {{ request()->routeIs('kontak') ? '#611818' : '#2D231F' }}; text-decoration: none; background: {{ request()->routeIs('kontak') ? '#FAF0E6' : 'transparent' }};">
                        <i class="bi bi-envelope-fill" style="color: #611818; font-size: 1.05rem; width: 20px; text-align:center;"></i> KONTAK
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
