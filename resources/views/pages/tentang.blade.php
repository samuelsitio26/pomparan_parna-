@extends('layouts.app')

@section('title', 'Tentang Parna – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/tentang.css') }}">
@endsection

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner py-4 bg-dark text-white text-center border-bottom border-warning border-4" style="background: linear-gradient(135deg, #4A1515 0%, #2A0808 100%);">
    <div class="container-xxl">
        <h2 class="h2 fw-bold text-warning text-uppercase mb-1" style="font-family: var(--font-heading);">TENTANG PARNA</h2>
        <p class="fs-6 text-light mb-0">Menyatakan Pomparan, Melestarikan Warisan Leluhur Raja Nai Ambaton</p>
    </div>
</section>

<div class="container-xxl my-5">
    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white mb-4">
                <h3 class="h4 fw-bold text-danger mb-3 border-bottom pb-2" style="font-family: var(--font-heading);">
                    <i class="bi bi-shield-shaded me-2"></i> SEJARAH & LANDASAN ADAT
                </h3>
                <p class="fs-5 leading-relaxed text-dark mb-3">
                    <strong>Parsadaan Pomparan Ni Raja Nai Ambaton (PARNA)</strong> adalah wadah persatuan kekeluargaan bagi seluruh marga keturunan Raja Nai Ambaton (Tuan Sorba Di Julu).
                </p>
                <p class="fs-6 text-secondary leading-relaxed mb-4">
                    Sesuai dengan ikrar janji leluhur <em>(Poda ni Raja Nai Ambaton)</em>, seluruh keturunan Parna yang terdiri dari <strong>{{ $margaCount }} Marga Resmi</strong> dipersatukan dalam prinsip persaudaraan yang kokoh: <em>"Sisada anak, sisada boru, tarombo rap gabe Sada"</em>.
                </p>

                <!-- Visi Misi Grid Bootstrap 5 -->
                <div class="row g-3 my-4">
                    <div class="col-12 col-md-6">
                        <div class="card h-100 border border-warning rounded-3 p-4 bg-light">
                            <h4 class="h5 fw-bold text-danger mb-2"><i class="bi bi-eye-fill me-2"></i> Visi Utama</h4>
                            <p class="small text-secondary mb-0">Menjadi wadah pemersatu keturunan Raja Nai Ambaton se-dunia yang berlandaskan adat, budaya, integritas, dan saling menopang satu sama lain.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card h-100 border border-warning rounded-3 p-4 bg-light">
                            <h4 class="h5 fw-bold text-danger mb-2"><i class="bi bi-bullseye me-2"></i> Misi Organisasi</h4>
                            <p class="small text-secondary mb-0">Melestarikan silsilah tarombo digital, memberikan perlindungan dan bantuan sosial bagi anggota, serta menjaga kelestarian adat Batak Parna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="col-12 col-lg-4">
            <div class="card border-danger border-2 rounded-4 p-4 shadow-sm mb-4 bg-light">
                <h4 class="h5 fw-bold text-danger mb-3"><i class="bi bi-info-circle-fill me-2"></i> Ringkasan Parna</h4>
                <ul class="list-group list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                        <span>Leluhur Utama:</span>
                        <strong class="text-danger">Raja Nai Ambaton</strong>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                        <span>Asal Usul:</span>
                        <strong>Samosir & Simalungun</strong>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                        <span>Jumlah Marga:</span>
                        <span class="badge bg-danger rounded-pill fs-6">{{ $margaCount }} Marga</span>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</div>
@endsection
