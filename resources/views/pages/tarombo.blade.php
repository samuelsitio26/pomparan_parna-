@extends('layouts.app')

@section('title', 'Tarombo Parna – Silsilah Keturunan Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/tarombo.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner">
    <div class="subpage-banner-content">
        <h2>TAROMBO PARNA</h2>
        <p class="tagline">SILSIALH KETURUNAN RAJA NAI AMBATON</p>
    </div>
</section>

<!-- Main Container Layout -->
<div class="layout-container">
    <div class="grid-3-col">
        <!-- LEFT SIDEBAR -->
        <aside class="sidebar-left">
            <div class="sidebar-card">
                <h4 class="sidebar-title">TAROMBO MENU</h4>
                <ul class="sidebar-nav-list">
                    <li class="sidebar-nav-item active">
                        <a href="{{ route('tarombo') }}"><i class="bi bi-diagram-3-fill"></i> Tarombo Utama</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-diagram-2-fill"></i> Garis Keturunan</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="{{ route('marga') }}"><i class="bi bi-card-checklist"></i> Daftar Marga Parna</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-map-fill"></i> Peta Persebaran</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-book-half"></i> Panduan Adat</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#"><i class="bi bi-info-circle-fill"></i> Info & Sumber</a>
                    </li>
                </ul>
            </div>

            <!-- Did You Know Box -->
            <div class="sidebar-card" style="background: #FAF6F0; border-color: var(--parna-gold-border);">
                <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px; color:var(--parna-maroon); font-weight:700; font-size:0.88rem;">
                    <i class="bi bi-clock-history" style="font-size:1.1rem; color:var(--parna-gold);"></i> Tahukah Anda?
                </div>
                <p style="font-size: 0.78rem; color: var(--parna-text-muted); line-height: 1.4; margin: 0;">
                    Tarombo adalah silsilah yang menjadi pedoman adat dan identitas bagi seluruh pomparan Raja Nai Ambaton (Parna).
                </p>
            </div>
        </aside>

        <!-- CENTER MAIN CONTENT -->
        <main class="main-content">
            <!-- Breadcrumb -->
            <div class="breadcrumb-bar">
                <a href="{{ route('home') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <a href="{{ route('tarombo') }}">Tarombo</a>
                <i class="bi bi-chevron-right"></i>
                <span>Tarombo Utama</span>
            </div>

            <!-- Diagram Legend -->
            <div class="tarombo-legend">
                <div class="legend-item"><span class="legend-color main"></span> Garis Utama</div>
                <div class="legend-item"><span class="legend-color second"></span> Generasi Lanjutan</div>
                <div class="legend-item"><span class="legend-color branch"></span> Cabang Marga</div>
            </div>

            <!-- Interactive Tree Container -->
            <div class="tarombo-tree-wrapper">
                <!-- Root Node -->
                <div class="tree-root-box">
                    <i class="bi bi-award-fill" style="font-size: 1.5rem; color: var(--parna-gold);"></i>
                    <h3>RAJA NAI AMBATON</h3>
                    <p>(TUAN SORBA DI JULU)</p>
                </div>

                <!-- Generation Level 1 (Tuan Sorba Nodes) -->
                <div class="tree-level-1">
                    <div class="tree-node-sm">Tuan Sorba Dibanua</div>
                    <div class="tree-node-sm">Tuan Sorba Dijou</div>
                    <div class="tree-node-sm">Tuan Sorba Ditonga</div>
                    <div class="tree-node-sm">Tuan Sorba Dibagasan</div>
                    <div class="tree-node-sm">Tuan Sorba Dibarita</div>
                    <div class="tree-node-sm">Tuan Sorba Diboru</div>
                    <div class="tree-node-sm">Tuan Sorba Dibata</div>
                </div>

                <!-- Vertical Connector Line -->
                <div class="tree-vertical-connector"></div>

                <!-- Middle Chain -->
                <div class="tree-middle-chain">
                    <div class="tree-node-mid">Guru Tatea Bulan</div>
                    <div class="tree-node-mid">Siboru Deak Parujar</div>
                    <div class="tree-root-box" style="margin: 0; padding: 8px 16px;">
                        <h3 style="font-size: 0.95rem;">Tuan Sorba Di Julu</h3>
                        <p style="font-size: 0.72rem;">(Raja Nai Ambaton)</p>
                    </div>
                </div>

                <!-- Branches Grid (Keturunan Dinamis dari Database) -->
                <div class="tree-branches-grid">
                    @foreach($generation2 as $index => $gen2)
                        <div class="branch-card">
                            <h5>{{ $index + 1 }}. {{ $gen2->name }}</h5>
                            <ul>
                                @foreach($gen2->children as $child)
                                    <li>{{ $child->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Bottom Notice -->
            <div class="notice-box" style="margin-top: 1.5rem; border-left-color: var(--parna-gold);">
                <div class="notice-icon" style="background-color: var(--parna-gold);">
                    <i class="bi bi-info-circle-fill"></i>
                </div>
                <div class="notice-content">
                    <p style="font-size: 0.82rem; color: var(--parna-text-muted);">
                        <strong>Catatan:</strong> Tarombo ini adalah representasi garis besar. Detail lengkap dan variasi tarombo dapat berbeda menurut sumber dan wilayah.
                    </p>
                </div>
            </div>
        </main>

        <!-- RIGHT SIDEBAR (TENTANG TAROMBO) -->
        <aside class="sidebar-right">
            <div class="sidebar-card">
                <h4 class="sidebar-title">TENTANG TAROMBO</h4>
                <p style="font-size: 0.84rem; color: var(--parna-text-muted); line-height: 1.5; margin-bottom: 1.2rem;">
                    Tarombo Parna menghubungkan kita dengan leluhur kita, Raja Nai Ambaton. Mengetahui tarombo berarti menjaga jati diri, adat, dan persaudaraan.
                </p>

                <!-- Batak Tree Illustration -->
                <div style="text-align: center; margin: 1.5rem 0;">
                    <img src="{{ asset('images/batak_tree.png') }}" alt="Pohon Silsilah Batak" style="max-width: 140px; margin: 0 auto; opacity: 0.9;" onerror="this.style.display='none'">
                </div>

                <!-- Quote -->
                <div style="font-family: 'Crimson Text', serif; font-style: italic; text-align: center; font-size: 0.9rem; color: var(--parna-maroon); margin-bottom: 1.2rem; line-height: 1.4;">
                    "Somba marhula-hula, elek marboru, manat mardongan tubu."
                </div>

                <!-- Legend List -->
                <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.78rem; color: var(--parna-text-muted); margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="bi bi-crown-fill" style="color: var(--parna-gold);"></i> Raja / Leluhur Utama
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="bi bi-diagram-2" style="color: #D4A359;"></i> Generasi Lanjutan
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="bi bi-diagram-3" style="color: #4A8C80;"></i> Cabang Marga (Keturunan)
                    </div>
                </div>

                <!-- PDF Download Button -->
                <a href="#" class="btn-primary-maroon btn-block">
                    <i class="bi bi-download"></i> UNDUH TAROMBO (PDF)
                </a>
            </div>
        </aside>
    </div>
</div>
@endsection
