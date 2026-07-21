<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PARNA – Parsadaan Pomparan Ni Raja Nai Ambaton')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;800;900&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3.3 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Core Custom Modular Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <style>
        /* Mobile Senior Quick Bottom Nav */
        .mobile-bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #FFFFFF;
            border-top: 2px solid var(--parna-gold);
            z-index: 1040;
            box-shadow: 0 -3px 12px rgba(0,0,0,0.12);
        }
        
        .mobile-bottom-nav .nav-item {
            flex: 1;
            text-align: center;
        }

        .mobile-bottom-nav .nav-link-mobile {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 8px 4px;
            color: #555555;
            font-size: 0.78rem;
            font-weight: 700;
            text-decoration: none;
        }

        .mobile-bottom-nav .nav-link-mobile i {
            font-size: 1.4rem;
            margin-bottom: 2px;
            color: var(--parna-maroon);
        }

        .mobile-bottom-nav .nav-link-mobile.active,
        .mobile-bottom-nav .nav-link-mobile:hover {
            color: var(--parna-maroon);
            background-color: #FAF3E6;
        }
        
        @media (max-width: 767.98px) {
            main {
                padding-bottom: 60px;
            }
        }
    </style>

    @yield('styles')
</head>
<body>

    <!-- Header Navbar -->
    @include('partials.header')

    <!-- Main Dynamic Content -->
    <main>
        @yield('content')
    </main>

    <!-- Senior Mobile Bottom Quick Navigation -->
    <div class="mobile-bottom-nav d-flex d-md-none">
        <div class="nav-item">
            <a href="{{ route('home') }}" class="nav-link-mobile {{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="bi bi-house-door-fill"></i>
                <span>Beranda</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{ route('tarombo') }}" class="nav-link-mobile {{ request()->routeIs('tarombo') ? 'active' : '' }}">
                <i class="bi bi-diagram-3-fill"></i>
                <span>Tarombo</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{ route('marga') }}" class="nav-link-mobile {{ request()->routeIs('marga') ? 'active' : '' }}">
                <i class="bi bi-card-checklist"></i>
                <span>Marga</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{ route('berita') }}" class="nav-link-mobile {{ request()->routeIs('berita') ? 'active' : '' }}">
                <i class="bi bi-newspaper"></i>
                <span>Berita</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{ route('tentang') }}" class="nav-link-mobile {{ request()->routeIs('tentang') ? 'active' : '' }}">
                <i class="bi bi-info-circle-fill"></i>
                <span>Tentang</span>
            </a>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')

</body>
</html>
