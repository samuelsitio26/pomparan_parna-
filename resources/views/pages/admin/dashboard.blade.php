<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard – PARNA</title>

    <!-- Google Fonts & Bootstrap 5 & Chart.js -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;800;900&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --parna-maroon-dark: #2A0808;
            --parna-maroon: #4A1515;
            --parna-maroon-hover: #5D1A1A;
            --parna-gold: #C59B27;
            --parna-gold-light: #F9F3E5;
            --parna-gold-border: #E8D8B5;
            --parna-bg: #FAF6F0;
            --sidebar-width: 260px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #F4F0EB;
            color: #2D231F;
            margin: 0;
            padding: 0;
        }

        /* Layout Structure */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styling */
        .admin-sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, #3A0F0F 0%, #200606 100%);
            color: #FFFFFF;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1.5rem 1rem;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            overflow-y: auto;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 1rem;
            text-decoration: none;
        }

        .sidebar-brand-icon {
            width: 44px;
            height: 44px;
            background: var(--parna-maroon);
            border: 1px solid var(--parna-gold);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--parna-gold);
            font-size: 1.4rem;
        }

        .sidebar-brand-text h1 {
            font-family: 'Cinzel', serif;
            font-size: 1.25rem;
            font-weight: 800;
            color: #FFFFFF;
            margin: 0;
            line-height: 1.1;
        }

        .sidebar-brand-text p {
            font-size: 0.6rem;
            color: var(--parna-gold-light);
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .admin-badge {
            background: rgba(197, 155, 39, 0.15);
            border: 1px solid var(--parna-gold);
            color: var(--parna-gold);
            font-size: 0.7rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 4px;
            text-align: center;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
        }

        .sidebar-section-title {
            font-size: 0.68rem;
            font-weight: 700;
            color: #9E8878;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 1.2rem 0 0.5rem 0.5rem;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            border-radius: 8px;
            color: #D1C5B8;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .sidebar-link:hover, .sidebar-link.active {
            background-color: var(--parna-maroon);
            color: #FFFFFF;
        }

        .sidebar-link.active {
            background: #5D1A1A;
            border-left: 4px solid var(--parna-gold);
        }

        .sidebar-link i {
            font-size: 1.1rem;
            color: #B5A191;
        }

        .sidebar-link:hover i, .sidebar-link.active i {
            color: var(--parna-gold);
        }

        /* Main Content Area */
        .admin-main {
            margin-left: var(--sidebar-width);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Top Header */
        .admin-top-header {
            background: #FFFFFF;
            padding: 1rem 2rem;
            border-bottom: 1px solid #E5DEC6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 90;
        }

        .search-dashboard-wrap {
            position: relative;
            width: 280px;
        }

        .search-dashboard-wrap input {
            width: 100%;
            padding: 8px 14px 8px 36px;
            border: 1px solid #E2D7C7;
            border-radius: 50px;
            background: #FAF8F5;
            font-size: 0.82rem;
            outline: none;
        }

        .search-dashboard-wrap i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #A09080;
        }

        /* Summary Stat Cards */
        .stat-card {
            background: #FFFFFF;
            border: 1px solid #EBE3D5;
            border-radius: 12px;
            padding: 1.2rem;
            display: flex;
            align-items: center;
            gap: 14px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }

        .stat-icon-circle {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: #FFFFFF;
            flex-shrink: 0;
        }

        /* Quick Action Grid */
        .action-card {
            background: #FFFFFF;
            border: 1px solid #EBE3D5;
            border-radius: 10px;
            padding: 1.2rem 0.8rem;
            text-align: center;
            text-decoration: none;
            color: #2D231F;
            transition: all 0.2s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .action-card:hover {
            transform: translateY(-3px);
            border-color: var(--parna-maroon);
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }

        .action-card i {
            font-size: 1.5rem;
            color: var(--parna-maroon);
        }

        .action-card span {
            font-size: 0.78rem;
            font-weight: 700;
        }
    </style>
</head>
<body>

<div class="admin-wrapper">
    <!-- LEFT SIDEBAR MATCHING SCREENSHOT 100% -->
    <aside class="admin-sidebar">
        <div>
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="sidebar-brand" target="_blank">
                <div class="sidebar-brand-icon">
                    <i class="bi bi-shield-shaded"></i>
                </div>
                <div class="sidebar-brand-text">
                    <h1>PARNA</h1>
                    <p>PARSADAAN POMPARAN NI RAJA NAI AMBATON</p>
                </div>
            </a>

            <!-- Admin Badge -->
            <div class="admin-badge">ADMIN PANEL</div>

            <!-- MENU UTAMA -->
            <div class="sidebar-section-title">MENU UTAMA</div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.dashboard') }}" class="sidebar-link active"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                <li><a href="{{ route('home') }}" target="_blank" class="sidebar-link"><i class="bi bi-browser-chrome"></i> Beranda</a></li>
                <li><a href="{{ route('tentang') }}" target="_blank" class="sidebar-link"><i class="bi bi-info-circle-fill"></i> Tentang Parna</a></li>
                <li><a href="{{ route('marga') }}" target="_blank" class="sidebar-link"><i class="bi bi-people-fill"></i> Marga Parna</a></li>
                <li><a href="{{ route('tarombo') }}" target="_blank" class="sidebar-link"><i class="bi bi-diagram-3-fill"></i> Tarombo</a></li>
                <li><a href="{{ route('berita') }}" target="_blank" class="sidebar-link"><i class="bi bi-newspaper"></i> Berita & Kegiatan</a></li>
                <li><a href="{{ route('galeri') }}" target="_blank" class="sidebar-link"><i class="bi bi-images"></i> Galeri</a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-megaphone-fill"></i> Pengumuman</a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-calendar-event-fill"></i> Agenda</a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-file-earmark-text-fill"></i> Dokumen</a></li>
            </ul>

            <!-- MANAJEMEN DATA -->
            <div class="sidebar-section-title">MANAJEMEN DATA</div>
            <ul class="sidebar-menu">
                <li><a href="#" class="sidebar-link"><i class="bi bi-person-lines-fill"></i> Manajemen User</a></li>
                <li><a href="{{ route('marga') }}" target="_blank" class="sidebar-link"><i class="bi bi-card-checklist"></i> Manajemen Marga</a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-tags-fill"></i> Kategori</a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-chat-left-dots-fill"></i> Komentar</a></li>
                <li><a href="{{ route('kontak') }}" target="_blank" class="sidebar-link"><i class="bi bi-envelope-fill"></i> Kontak Masuk</a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-send-fill"></i> Newsletter</a></li>
            </ul>

            <!-- PENGATURAN -->
            <div class="sidebar-section-title">PENGATURAN</div>
            <ul class="sidebar-menu">
                <li><a href="#" class="sidebar-link"><i class="bi bi-gear-fill"></i> Pengaturan Website</a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-person-badge-fill"></i> Profil Admin</a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-database-fill-gear"></i> Backup & Restore</a></li>
            </ul>
        </div>

        <!-- Logout Button at Sidebar Bottom -->
        <div class="mt-4 pt-3 border-top border-secondary border-opacity-25">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger w-100 rounded-pill fw-bold py-2 d-flex align-items-center justify-content-center gap-2" style="background-color: #5D1A1A; border: none;">
                    <i class="bi bi-box-arrow-left"></i> Keluar
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT RIGHT AREA -->
    <main class="admin-main">
        <!-- TOP HEADER BAR -->
        <header class="admin-top-header">
            <div class="d-flex align-items-center gap-3">
                <i class="bi bi-list fs-3 text-secondary" style="cursor: pointer;"></i>
                <div>
                    <h2 class="h5 fw-bold text-dark mb-0">Selamat datang, Admin!</h2>
                    <p class="small text-muted mb-0">Berikut adalah ringkasan informasi website Parna.</p>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3">
                <div class="search-dashboard-wrap">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Cari di dashboard...">
                </div>

                <div class="position-relative cursor-pointer">
                    <i class="bi bi-bell-fill fs-5 text-secondary"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:0.6rem;">5</span>
                </div>

                <div class="d-flex align-items-center gap-2 border-start ps-3">
                    <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center fw-bold" style="width:38px; height:38px; background-color: var(--parna-maroon) !important;">
                        <i class="bi bi-person-fill fs-5"></i>
                    </div>
                    <div class="lh-1">
                        <span class="fw-bold d-block small text-dark">Admin Parna</span>
                        <span class="text-muted" style="font-size:0.7rem;">Super Admin</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- DASHBOARD BODY CONTENT -->
        <div class="p-4">
            <!-- 5 SUMMARY STAT COUNTER CARDS -->
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-3 mb-4">
                <!-- Card 1: Total Member -->
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-icon-circle" style="background-color: #5D1A1A;">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <span class="small text-muted fw-bold text-uppercase d-block" style="font-size:0.7rem;">TOTAL MEMBER</span>
                            <h3 class="h4 fw-bold text-dark mb-0">1.248</h3>
                            <span class="badge bg-success-subtle text-success small" style="font-size:0.68rem;"><i class="bi bi-arrow-up-short"></i> 12% dari bulan lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Berita -->
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-icon-circle" style="background-color: #A3702A;">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                        <div>
                            <span class="small text-muted fw-bold text-uppercase d-block" style="font-size:0.7rem;">BERITA</span>
                            <h3 class="h4 fw-bold text-dark mb-0">{{ $beritaCount }}</h3>
                            <span class="badge bg-success-subtle text-success small" style="font-size:0.68rem;"><i class="bi bi-arrow-up-short"></i> 15% dari bulan lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Kegiatan -->
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-icon-circle" style="background-color: #2E7D32;">
                            <i class="bi bi-calendar-event-fill"></i>
                        </div>
                        <div>
                            <span class="small text-muted fw-bold text-uppercase d-block" style="font-size:0.7rem;">KEGIATAN</span>
                            <h3 class="h4 fw-bold text-dark mb-0">24</h3>
                            <span class="badge bg-success-subtle text-success small" style="font-size:0.68rem;"><i class="bi bi-arrow-up-short"></i> 8% dari bulan lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Foto Galeri -->
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-icon-circle" style="background-color: #1976D2;">
                            <i class="bi bi-images"></i>
                        </div>
                        <div>
                            <span class="small text-muted fw-bold text-uppercase d-block" style="font-size:0.7rem;">FOTO GALERI</span>
                            <h3 class="h4 fw-bold text-dark mb-0">{{ $galeriCount }}</h3>
                            <span class="badge bg-success-subtle text-success small" style="font-size:0.68rem;"><i class="bi bi-arrow-up-short"></i> 10% dari bulan lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Kontak Masuk -->
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-icon-circle" style="background-color: #7B1FA2;">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <span class="small text-muted fw-bold text-uppercase d-block" style="font-size:0.7rem;">KONTAK MASUK</span>
                            <h3 class="h4 fw-bold text-dark mb-0">32</h3>
                            <span class="badge bg-danger-subtle text-danger small" style="font-size:0.68rem;"><i class="bi bi-arrow-down-short"></i> 5% dari bulan lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MIDDLE SECTION: CHARTS & QUICK ACTIONS -->
            <div class="row g-4 mb-4">
                <!-- Line Chart Visitor Stats -->
                <div class="col-12 col-lg-6">
                    <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="h6 fw-bold text-dark mb-0">Statistik Pengunjung</h3>
                            <select class="form-select form-select-sm rounded-pill w-auto small">
                                <option>30 Hari Terakhir</option>
                                <option>7 Hari Terakhir</option>
                            </select>
                        </div>
                        <div style="height: 220px;">
                            <canvas id="visitorChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Donut Chart Traffic Source -->
                <div class="col-12 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
                        <h3 class="h6 fw-bold text-dark mb-3">Pengunjung Berdasarkan Sumber</h3>
                        <div style="height: 180px;" class="position-relative">
                            <canvas id="sourceChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions Grid (Aksi Cepat) -->
                <div class="col-12 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
                        <h3 class="h6 fw-bold text-dark mb-3">Aksi Cepat</h3>
                        <div class="row row-cols-3 g-2">
                            <div class="col">
                                <a href="#" class="action-card">
                                    <i class="bi bi-pencil-square"></i>
                                    <span>Tambah Berita</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="action-card">
                                    <i class="bi bi-calendar-plus"></i>
                                    <span>Tambah Kegiatan</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="action-card">
                                    <i class="bi bi-image"></i>
                                    <span>Upload Foto</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="action-card">
                                    <i class="bi bi-megaphone"></i>
                                    <span>Tambah Pengumuman</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="action-card">
                                    <i class="bi bi-people"></i>
                                    <span>Tambah Marga</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="action-card">
                                    <i class="bi bi-person-plus"></i>
                                    <span>Tambah User</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOTTOM SECTION: BERITA TABLE, RECENT ACTIVITY & UPCOMING EVENTS -->
            <div class="row g-4">
                <!-- Berita Terbaru Table -->
                <div class="col-12 col-lg-8">
                    <div class="card border-0 shadow-sm rounded-3 p-4 bg-white">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="h6 fw-bold text-dark mb-0">Berita Terbaru</h3>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle table-hover mb-3">
                                <thead class="table-light small text-uppercase fw-bold text-secondary">
                                    <tr>
                                        <th>Judul Berita</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="small">
                                    @foreach($recentBerita as $item)
                                        <tr>
                                            <td class="fw-bold text-dark" style="max-width:240px;">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="{{ asset('images/hero_toba.png') }}" style="width:40px; height:32px; object-fit:cover; border-radius:4px;">
                                                    <span class="text-truncate">{{ $item->title }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger-subtle text-danger px-2 py-1">{{ $item->category }}</span>
                                            </td>
                                            <td class="text-muted">{{ optional($item->event_date)->format('d Mei Y') }}</td>
                                            <td>
                                                <span class="badge bg-success-subtle text-success px-2 py-1">Dipublikasi</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center justify-content-center gap-2">
                                                    <a href="{{ route('berita.detail', $item->slug) }}" target="_blank" class="text-secondary"><i class="bi bi-eye"></i></a>
                                                    <a href="#" class="text-secondary"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center pt-2">
                            <a href="{{ route('berita') }}" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill fw-bold px-4">
                                Lihat Semua Berita <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Aktivitas Terbaru & Agenda Mendatang -->
                <div class="col-12 col-lg-4">
                    <!-- Aktivitas Terbaru -->
                    <div class="card border-0 shadow-sm rounded-3 p-4 bg-white mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="h6 fw-bold text-dark mb-0">Aktivitas Terbaru</h3>
                            <a href="#" class="small text-danger text-decoration-none fw-bold">Lihat Semua</a>
                        </div>

                        <div class="d-flex flex-column gap-3 small">
                            <div class="d-flex gap-3 align-items-start border-bottom pb-2">
                                <div class="rounded-circle bg-danger-subtle text-danger p-2 fs-6"><i class="bi bi-person"></i></div>
                                <div>
                                    <strong class="d-block text-dark">Admin menambahkan berita baru</strong>
                                    <span class="text-muted">Pesta Pomparan Parna 2026 Berlangsung Meriah di Balige</span>
                                    <div class="text-muted" style="font-size:0.7rem;">2 jam yang lalu</div>
                                </div>
                            </div>

                            <div class="d-flex gap-3 align-items-start border-bottom pb-2">
                                <div class="rounded-circle bg-success-subtle text-success p-2 fs-6"><i class="bi bi-image"></i></div>
                                <div>
                                    <strong class="d-block text-dark">Admin mengunggah 15 foto baru ke galeri</strong>
                                    <span class="text-muted">Album: Pesta Pomparan Parna 2026</span>
                                    <div class="text-muted" style="font-size:0.7rem;">4 jam yang lalu</div>
                                </div>
                            </div>

                            <div class="d-flex gap-3 align-items-start">
                                <div class="rounded-circle bg-info-subtle text-info p-2 fs-6"><i class="bi bi-envelope"></i></div>
                                <div>
                                    <strong class="d-block text-dark">Pesan kontak baru dari Budi Sitorus</strong>
                                    <div class="text-muted" style="font-size:0.7rem;">6 jam yang lalu</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Agenda Mendatang -->
                    <div class="card border-0 shadow-sm rounded-3 p-4 bg-white">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="h6 fw-bold text-dark mb-0">Agenda Mendatang</h3>
                            <a href="#" class="small text-danger text-decoration-none fw-bold">Lihat Semua</a>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-light">
                                <div class="bg-danger text-white rounded-3 p-2 text-center fw-bold" style="width:46px; background-color: var(--parna-maroon) !important;">
                                    <span class="d-block fs-5 lh-1">15</span>
                                    <span style="font-size:0.65rem;">JUN</span>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="h6 fw-bold text-dark mb-0" style="font-size:0.85rem;">Musyawarah Wilayah Parna</h5>
                                    <small class="text-muted"><i class="bi bi-geo-alt-fill text-danger"></i> Medan, Sumatera Utara</small>
                                </div>
                                <span class="badge bg-success-subtle text-success small">15 Hari Lagi</span>
                            </div>

                            <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-light">
                                <div class="bg-danger text-white rounded-3 p-2 text-center fw-bold" style="width:46px; background-color: var(--parna-maroon) !important;">
                                    <span class="d-block fs-5 lh-1">20</span>
                                    <span style="font-size:0.65rem;">JUL</span>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="h6 fw-bold text-dark mb-0" style="font-size:0.85rem;">Pesta Pomparan Parna 2026</h5>
                                    <small class="text-muted"><i class="bi bi-geo-alt-fill text-danger"></i> Samosir, Sumatera Utara</small>
                                </div>
                                <span class="badge bg-warning-subtle text-warning small">50 Hari Lagi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="mt-auto py-3 bg-white border-top text-center text-muted small px-4 d-flex align-items-center justify-content-between">
            <span>&copy; {{ date('Y') }} Parsadaan Pomparan Ni Raja Nai Ambaton (Parna). All Rights Reserved.</span>
            <span>Versi 1.0.0</span>
        </footer>
    </main>
</div>

<!-- Render Line Chart & Donut Chart Scripts -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Line Chart Visitor Stats
    const ctxVisitor = document.getElementById('visitorChart').getContext('2d');
    new Chart(ctxVisitor, {
        type: 'line',
        data: {
            labels: ['1 Mei', '7 Mei', '13 Mei', '19 Mei', '25 Mei', '31 Mei'],
            datasets: [
                {
                    label: 'Pengunjung',
                    data: [1500, 1950, 1400, 2050, 2200, 1900],
                    borderColor: '#4A1515',
                    backgroundColor: 'rgba(74, 21, 21, 0.05)',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: true
                },
                {
                    label: 'Pengunjung Unik',
                    data: [700, 1000, 750, 1050, 1250, 980],
                    borderColor: '#C59B27',
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    borderDash: [5, 5],
                    tension: 0.3
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'top' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // 2. Donut Chart Source
    const ctxSource = document.getElementById('sourceChart').getContext('2d');
    new Chart(ctxSource, {
        type: 'doughnut',
        data: {
            labels: ['Langsung', 'Google', 'Sosial Media', 'Lainnya'],
            datasets: [{
                data: [1250, 1020, 560, 290],
                backgroundColor: ['#4A1515', '#C59B27', '#2E7D32', '#1976D2']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom', labels: { boxWidth: 12, font: { size: 10 } } }
            }
        }
    });
});
</script>

</body>
</html>
