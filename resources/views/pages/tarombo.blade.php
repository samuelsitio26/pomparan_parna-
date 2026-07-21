@extends('layouts.app')

@section('title', 'Tarombo Parna – Silsilah Keturunan Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/tarombo.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner py-4 bg-dark text-white text-center border-bottom border-warning border-4" style="background: linear-gradient(135deg, #4A1515 0%, #2A0808 100%);">
    <div class="container-xxl">
        <h2 class="h2 fw-bold text-warning text-uppercase mb-1" style="font-family: var(--font-heading);">TAROMBO DIGITAL PARNA</h2>
        <p class="fs-6 text-light mb-0">Silsilah Interaktif Keturunan Raja Nai Ambaton</p>
    </div>
</section>

<div class="container-xxl my-5">
    <!-- Notice Box Ramah Lansia -->
    <div class="card border-start border-danger border-4 shadow-sm rounded-3 p-3 mb-4 bg-white">
        <div class="d-flex align-items-center gap-3">
            <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center p-3 fs-3" style="width: 48px; height: 48px;">
                <i class="bi bi-info-circle-fill"></i>
            </div>
            <div>
                <h5 class="h6 fw-bold text-danger mb-1">Panduan Membaca Tarombo</h5>
                <p class="small text-secondary mb-0">Diagram di bawah ini menampilkan silsilah resmi berpuncak pada **Raja Nai Ambaton** (Generasi 1) yang menurunkan 4 putra utama (Generasi 2), dan marga-marga turunan (Generasi 3).</p>
            </div>
        </div>
    </div>

    <!-- Dynamic Tarombo Hierarchy Diagram -->
    <div class="tarombo-tree-wrapper card border-0 shadow-lg rounded-4 p-4 mb-5">
        <!-- Root Generation 1 Node -->
        @if($rootNode)
            <div class="tree-root-box bg-danger text-white text-center rounded-3 p-3 mx-auto shadow-sm border border-warning border-2 mb-4" style="max-width: 420px; background-color: var(--parna-maroon) !important;">
                <span class="badge bg-warning text-dark fw-bold px-3 py-1 rounded-pill mb-2">GENERASI 1 (LELUHUR AGUNG)</span>
                <h3 class="h4 fw-bold text-white mb-1" style="font-family: var(--font-heading);">{{ $rootNode->name }}</h3>
                <p class="small text-warning-subtle mb-0">{{ $rootNode->biography }}</p>
            </div>
            <div class="tree-vertical-connector bg-warning mx-auto mb-4" style="width: 3px; height: 36px;"></div>
        @endif

        <!-- Generation 2 Grid (4 Putra Utama) -->
        <h4 class="h6 text-center text-uppercase fw-bold text-muted mb-3"><i class="bi bi-diagram-2-fill me-1 text-danger"></i> GENERASI 2 (4 PUTRA UTAMA)</h4>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mb-4">
            @foreach($generation2 as $gen2Node)
                <div class="col">
                    <div class="card h-100 border border-warning border-2 rounded-3 p-3 shadow-sm bg-light text-center">
                        <span class="badge bg-danger text-white px-2 py-1 mb-2">{{ $gen2Node->generation_level ? 'Gen 2' : '' }}</span>
                        <h4 class="h5 fw-bold text-danger mb-1">{{ $gen2Node->name }}</h4>
                        <p class="small text-muted mb-2">{{ $gen2Node->biography }}</p>

                        <!-- Children / Keturunan Gen 3 -->
                        @if($gen2Node->children->count() > 0)
                            <div class="border-top pt-2 mt-2">
                                <span class="small fw-bold text-secondary d-block mb-1">Keturunan / Marga:</span>
                                <ul class="list-unstyled small mb-0 text-start">
                                    @foreach($gen2Node->children as $child)
                                        <li class="py-1 border-bottom text-dark fw-medium">
                                            <i class="bi bi-dash text-danger me-1"></i> {{ $child->name }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
