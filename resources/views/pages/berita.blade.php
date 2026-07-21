@extends('layouts.app')

@section('title', 'Berita & Kegiatan – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/berita.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner py-4 bg-dark text-white text-center border-bottom border-warning border-4" style="background: linear-gradient(135deg, #4A1515 0%, #2A0808 100%);">
    <div class="container-xxl">
        <h2 class="h2 fw-bold text-warning text-uppercase mb-1" style="font-family: var(--font-heading);">BERITA & KEGIATAN</h2>
        <p class="fs-6 text-light mb-0">Kabar Terkini dan Informasi Acara Adat Parsadaan Parna</p>
    </div>
</section>

<div class="container-xxl my-5">
    <!-- Filter Kategori & Search -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-white">
        <form action="{{ route('berita') }}" method="GET" class="row g-3">
            <div class="col-12 col-md-8">
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 rounded-start-pill ps-3"><i class="bi bi-search text-danger fs-5"></i></span>
                    <input type="text" name="q" value="{{ request('q') }}" class="form-control form-control-lg border-start-0 rounded-end-pill fs-5" placeholder="Ketik kata kunci berita...">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <select name="category" class="form-select form-select-lg rounded-pill fs-6" onchange="this.form.submit()">
                    <option value="">-- Semua Kategori Berita --</option>
                    <option value="Berita" {{ request('category') == 'Berita' ? 'selected' : '' }}>Berita</option>
                    <option value="Kegiatan" {{ request('category') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                    <option value="Pengumuman" {{ request('category') == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                    <option value="Adat" {{ request('category') == 'Adat' ? 'selected' : '' }}>Adat</option>
                </select>
            </div>
        </form>
    </div>

    <!-- Berita List Grid (Data Dinamis DB) -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
        @forelse($beritas as $berita)
            <div class="col">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-danger px-3 py-1 rounded-pill">{{ $berita->category }}</span>
                            <small class="text-muted"><i class="bi bi-calendar3 me-1"></i> {{ optional($berita->event_date)->format('d M Y') }}</small>
                        </div>
                        <h3 class="h5 fw-bold text-dark mb-2">{{ $berita->title }}</h3>
                        <p class="small text-secondary flex-grow-1 mb-3">{{ $berita->summary }}</p>
                        @if($berita->location)
                            <div class="small text-muted mb-3"><i class="bi bi-geo-alt-fill text-danger me-1"></i> {{ $berita->location }}</div>
                        @endif
                        <a href="{{ route('berita.detail', $berita->slug) }}" class="btn btn-outline-danger btn-sm rounded-pill fw-bold align-self-start mt-auto">
                            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-newspaper fs-1 text-muted d-block mb-3"></i>
                <h4 class="h5 fw-bold text-muted">Belum ada berita ditemukan.</h4>
            </div>
        @endforelse
    </div>
</div>
@endsection
