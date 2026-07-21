@extends('layouts.app')

@section('title', 'Beranda – PARNA Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection

@section('content')
<!-- Hero Section Home Bootstrap 5 -->
<section class="home-hero py-5">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                <p class="script-sub fs-3 fst-italic text-warning mb-1">Horas! Selamat Datang di</p>
                <h1 class="display-2 fw-black text-danger mb-2" style="font-family: var(--font-heading); color: var(--parna-maroon) !important;">PARNA</h1>
                <h3 class="h3 fw-bold text-dark mb-3">Parsadaan Pomparan Ni Raja Nai Ambaton</h3>
                <p class="fs-5 text-secondary mb-4 leading-relaxed">
                    Bersatu dalam adat, berpegang pada tarombo, melestarikan warisan leluhur Raja Nai Ambaton secara digital dan transparan untuk seluruh generasi.
                </p>
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="{{ route('tarombo') }}" class="btn btn-lg btn-danger rounded-pill fw-bold px-4 py-3 shadow" style="background-color: var(--parna-maroon); border-color: var(--parna-maroon);">
                        <i class="bi bi-diagram-3-fill me-2"></i> LIHAT TAROMBO SILSILAH
                    </a>
                    <a href="{{ route('marga') }}" class="btn btn-lg btn-outline-dark rounded-pill fw-bold px-4 py-3">
                        <i class="bi bi-card-checklist me-2"></i> DAFTAR MARGA PARNA
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating Highlights Counter Bar (Data Dinamis DB) -->
<div class="container-xxl mt-n4 mb-5">
    <div class="card border-0 shadow-lg rounded-4 p-3 bg-white">
        <div class="row g-3 text-center align-items-center">
            <div class="col-6 col-md-3 border-end">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="bi bi-people-fill fs-1 text-danger"></i>
                    <div class="text-start">
                        <h4 class="h2 fw-bold text-dark mb-0">{{ $totalMargaCount }}</h4>
                        <span class="small text-muted fw-bold text-uppercase">Marga Parna</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 border-end-md">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="bi bi-diagram-3-fill fs-1 text-warning"></i>
                    <div class="text-start">
                        <h4 class="h2 fw-bold text-dark mb-0">{{ $totalTaromboNodes }}+</h4>
                        <span class="small text-muted fw-bold text-uppercase">Generasi Tarombo</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 border-end">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="bi bi-geo-alt-fill fs-1 text-danger"></i>
                    <div class="text-start">
                        <h4 class="h2 fw-bold text-dark mb-0">Samosir</h4>
                        <span class="small text-muted fw-bold text-uppercase">Asal-Usul Adat</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="bi bi-shield-check fs-1 text-success"></i>
                    <div class="text-start">
                        <h4 class="h2 fw-bold text-dark mb-0">Raja Nai Ambaton</h4>
                        <span class="small text-muted fw-bold text-uppercase">Leluhur Agung</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Grid -->
<div class="container-xxl my-5">
    <div class="row g-4">
        <!-- Main Section: Marga Preview (Data Dinamis DB) -->
        <div class="col-12 col-lg-8">
            <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-2">
                <h3 class="h4 fw-bold text-danger mb-0" style="font-family: var(--font-heading);">
                    <i class="bi bi-card-checklist me-2"></i> DAFTAR MARGA PARNA
                </h3>
                <a href="{{ route('marga') }}" class="btn btn-sm btn-outline-danger rounded-pill fw-bold px-3">
                    Lihat Semua ({{ $totalMargaCount }}) <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-5">
                @foreach($margasPreview as $marga)
                    <div class="col">
                        <div class="card h-100 border rounded-3 p-3 shadow-sm hover-shadow transition">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center text-danger fw-bold fs-4" style="width: 46px; height: 46px; background-color: #F8EFE7;">
                                    {{ strtoupper(substr($marga->name, 0, 1)) }}
                                </div>
                                <div>
                                    <h5 class="h6 fw-bold mb-1 text-dark">{{ $marga->name }}</h5>
                                    <span class="badge bg-light text-secondary border small">{{ $marga->branch_group }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Featured News (Data Dinamis DB) -->
            <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-2">
                <h3 class="h4 fw-bold text-danger mb-0" style="font-family: var(--font-heading);">
                    <i class="bi bi-newspaper me-2"></i> BERITA & KEGIATAN TERKINI
                </h3>
                <a href="{{ route('berita') }}" class="btn btn-sm btn-outline-danger rounded-pill fw-bold px-3">
                    Semua Berita <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="row g-4 mb-4">
                @foreach($featuredBerita as $berita)
                    <div class="col-12 col-md-6">
                        <div class="card h-100 border rounded-3 shadow-sm overflow-hidden">
                            <div class="card-body d-flex flex-column p-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="badge bg-danger px-3 py-1 rounded-pill">{{ $berita->category }}</span>
                                    <small class="text-muted"><i class="bi bi-calendar3 me-1"></i> {{ optional($berita->event_date)->format('d M Y') ?? '2026' }}</small>
                                </div>
                                <h4 class="h5 fw-bold text-dark mb-2">{{ $berita->title }}</h4>
                                <p class="small text-secondary flex-grow-1 mb-3">{{ $berita->summary }}</p>
                                <a href="{{ route('berita.detail', $berita->slug) }}" class="fw-bold text-danger text-decoration-none">
                                    Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Sidebar Right Senior Friendly -->
        <aside class="col-12 col-lg-4">
            <!-- Card Cari Tarombo Cepat -->
            <div class="card border-danger border-2 rounded-4 p-4 shadow-sm mb-4 bg-light">
                <h4 class="h5 fw-bold text-danger mb-2"><i class="bi bi-search me-2"></i> Cari Tarombo Anda</h4>
                <p class="small text-secondary mb-3">Masukkan nama atau marga Anda untuk menemukan posisi dalam pohon silsilah Parna.</p>
                <form action="{{ route('tarombo') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="q" class="form-control form-control-lg rounded-start-pill fs-6" placeholder="Ketik nama atau marga...">
                        <button class="btn btn-lg btn-danger rounded-end-pill px-4" type="submit" style="background-color: var(--parna-maroon);"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>

            <!-- Tahukah Anda Box -->
            <div class="card border-warning border-1 rounded-4 p-4 shadow-sm mb-4" style="background-color: #FFFBF3;">
                <div class="d-flex align-items-center gap-2 text-warning mb-2 fw-bold fs-6">
                    <i class="bi bi-lightbulb-fill fs-4"></i> Tahukah Anda?
                </div>
                <p class="small text-dark leading-relaxed mb-0">
                    Setiap keturunan Raja Nai Ambaton terikat dalam ikatan suci adat Parna yang menjunjung tinggi kebersamaan, rasa saling menghormati, dan larangan saling menikahi antar sesama marga rumpun Parna.
                </p>
            </div>
        </aside>
    </div>
</div>
@endsection
