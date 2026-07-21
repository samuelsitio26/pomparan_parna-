@extends('layouts.app')

@section('title', 'Daftar Marga Parna – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/marga.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner py-4 bg-dark text-white text-center border-bottom border-warning border-4" style="background: linear-gradient(135deg, #4A1515 0%, #2A0808 100%);">
    <div class="container-xxl">
        <h2 class="h2 fw-bold text-warning text-uppercase mb-1" style="font-family: var(--font-heading);">DAFTAR MARGA PARNA</h2>
        <p class="fs-6 text-light mb-0">Daftar Marga Resmi dalam Parsadaan Pomparan Ni Raja Nai Ambaton</p>
    </div>
</section>

<div class="container-xxl my-5">
    <!-- Search & Filter Form Ramah Lansia (Tombol & Text Input Besar) -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-white">
        <form action="{{ route('marga') }}" method="GET" class="row g-3 align-items-center">
            <div class="col-12 col-md-7">
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 rounded-start-pill ps-3"><i class="bi bi-search text-danger fs-5"></i></span>
                    <input type="text" name="q" value="{{ request('q') }}" class="form-control form-control-lg border-start-0 rounded-end-pill fs-5" placeholder="Ketik nama marga (contoh: Simbolon, Tamba, Saragih)...">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <select name="branch" class="form-select form-select-lg rounded-pill fs-6" onchange="this.form.submit()">
                    <option value="">-- Semua Rumpun Cabang --</option>
                    @foreach($branches as $branch)
                        <option value="{{ $branch }}" {{ request('branch') == $branch ? 'selected' : '' }}>{{ $branch }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-2">
                <button type="submit" class="btn btn-lg btn-danger rounded-pill fw-bold w-100 fs-6 shadow-sm" style="background-color: var(--parna-maroon);">
                    <i class="bi bi-funnel-fill me-1"></i> FILTER
                </button>
            </div>
        </form>
    </div>

    <!-- Marga Grid Result (Data Dinamis DB) -->
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h4 class="h5 fw-bold text-secondary mb-0">Menampilkan {{ $margas->count() }} Marga Parna</h4>
        @if(request('q') || request('branch'))
            <a href="{{ route('marga') }}" class="btn btn-sm btn-outline-secondary rounded-pill"><i class="bi bi-x-circle me-1"></i> Reset Pencarian</a>
        @endif
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 mb-5">
        @forelse($margas as $marga)
            <div class="col">
                <div class="card h-100 border rounded-3 p-3 shadow-sm hover-shadow transition">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-danger fw-bold fs-3" style="width: 52px; height: 52px; background-color: #F8EFE7;">
                            {{ strtoupper(substr($marga->name, 0, 1)) }}
                        </div>
                        <div>
                            <h4 class="h5 fw-bold mb-1 text-dark">{{ $marga->name }}</h4>
                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle small">{{ $marga->branch_group }}</span>
                        </div>
                    </div>
                    @if($marga->description)
                        <p class="small text-muted mt-2 mb-0 border-top pt-2">{{ Str::limit($marga->description, 80) }}</p>
                    @endif
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-search fs-1 text-muted d-block mb-3"></i>
                <h4 class="h5 fw-bold text-muted">Marga yang Anda cari tidak ditemukan.</h4>
                <p class="text-secondary small">Coba ketik nama marga lain seperti Simbolon, Tamba, Saragih, Munthe, Sitio.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
